<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' =>'UTM',
                'supplier_nama' =>'Utama',
                'supplier_alamat' =>'Malang',
                'created_at' => now(),
            ],
            [
                'supplier_kode' =>'CDN',
                'supplier_nama' =>'Cadangan',
                'supplier_alamat'=>'Surabaya',
                'created_at' => now(),
            ],
            [
                'supplier_kode' =>'TMB',
                'supplier_nama' =>'Tambahan',
                'supplier_alamat'=>'Jakarta',
                'created_at' => now(),
            ],
        ];

        DB::table('m_supplier')->insert($data);
    
    }
}
