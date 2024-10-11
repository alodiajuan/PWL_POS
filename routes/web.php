<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+'); // memastikan parameter {id} berupa angka

// Routes untuk otentikasi
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

// Routes dengan middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']); // Halaman utama

    // Routes untuk user dengan prefix 'user' dan middleware authorize:ADM
    Route::group(['prefix' => 'user', 'middleware' => 'authorize:ADM'], function() {
        Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
        Route::post('/list', [UserController::class, 'list']);      // menampilkan data user dalam JSON untuk datatables
        Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
        Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
        Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan form tambah user Ajax
        Route::post('/ajax', [UserController::class, 'store_ajax']); // Menyimpan user baru via Ajax
        Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
        Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
        Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // Edit user via Ajax
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // Update user via Ajax
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Tampilkan form konfirmasi delete via Ajax
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Hapus user via Ajax
        Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
    });

    // Routes untuk level dengan prefix 'level' dan middleware authorize:ADM,MNG
    Route::group(['prefix' => 'level', 'middleware' => 'authorize:ADM,MNG'], function(){
        Route::get('/', [LevelController::class, 'index']);          
        Route::post('/list', [LevelController::class, 'list']);     
        Route::get('/create', [LevelController::class, 'create']);  
        Route::post('/', [LevelController::class, 'store']);        
        Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('/ajax', [LevelController::class, 'store_ajax']);
        Route::get('/{id}', [LevelController::class, 'show']);      
        Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);
        Route::get('/{id}/edit', [LevelController::class, 'edit']);  
        Route::put('/{id}', [LevelController::class, 'update']);    
        Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::delete('/{id}', [LevelController::class, 'destroy']);
    });

    // Routes untuk kategori dengan prefix 'kategori' dan middleware authorize:ADM,MNG,STF
    Route::group(['prefix' => 'kategori', 'middleware' => 'authorize:ADM,MNG,STF'], function(){
        Route::get('/', [KategoriController::class, 'index']);         
        Route::post('/list', [KategoriController::class, 'list']);     
        Route::get('/create', [KategoriController::class, 'create']);  
        Route::post('/', [KategoriController::class, 'store']);        
        Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/{id}', [KategoriController::class, 'show']);      
        Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
        Route::get('/{id}/edit', [KategoriController::class, 'edit']);  
        Route::put('/{id}', [KategoriController::class, 'update']);    
        Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::delete('/{id}', [KategoriController::class, 'destroy']);
    });

    // Routes untuk barang dengan prefix 'barang' dan middleware authorize:ADM,MNG
    Route::group(['prefix' => 'barang', 'middleware' => 'authorize:ADM,MNG'], function(){
        Route::get('/', [BarangController::class, 'index']);          
        Route::post('/list', [BarangController::class, 'list']);      
        Route::get('/create', [BarangController::class, 'create']);   
        Route::post('/', [BarangController::class, 'store']);         
        Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/ajax', [BarangController::class, 'store_ajax']);
        Route::get('/{id}', [BarangController::class, 'show']);       
        Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']);
        Route::get('/{id}/edit', [BarangController::class, 'edit']);  
        Route::put('/{id}', [BarangController::class, 'update']);    
        Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::delete('/{id}', [BarangController::class, 'destroy']);
    });

    // Routes untuk supplier dengan prefix 'supplier' dan middleware authorize:ADM,MNG,STF
    Route::group(['prefix' => 'supplier', 'middleware' => 'authorize:ADM,MNG,STF'], function(){
        Route::get('/', [SupplierController::class, 'index']);          
        Route::post('/list', [SupplierController::class, 'list']);      
        Route::get('/create', [SupplierController::class, 'create']);   
        Route::post('/', [SupplierController::class, 'store']);         
        Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/{id}', [SupplierController::class, 'show']);       
        Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
        Route::get('/{id}/edit', [SupplierController::class, 'edit']);  
        Route::put('/{id}', [SupplierController::class, 'update']);    
        Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::delete('/{id}', [SupplierController::class, 'destroy']);
    });
});
