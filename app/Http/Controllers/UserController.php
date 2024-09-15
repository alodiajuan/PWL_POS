<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {    
        // tambah data user dengan Eloquent Model

        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username','customer-1')->update($data); //data  user
        
        $user = UserModel::all(); //ambil semua data tabel m_user
        return view('user', ['data' => $user]);
    }
}
