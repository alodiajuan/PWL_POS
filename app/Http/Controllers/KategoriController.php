<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => "SNK",
        //     'kategori_nama' => "Snack/Makanan Ringan",
        //     'created_at' => now()
        // ];
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row. ' baris';
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data'=>$data]);
    }
}
