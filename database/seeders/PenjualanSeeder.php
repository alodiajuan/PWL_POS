<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 2,
                'pembeli' => 'Chadra',
                'penjualan_kode' => 'APS1',
                'penjualan_tanggal' => '2024-10-1',
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Ayu',
                'penjualan_kode' => 'APS2',
                'penjualan_tanggal' => '2024-10-3',
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Judika',
                'penjualan_kode' => 'APS3',
                'penjualan_tanggal' => '2024-09-29',
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Hadju',
                'penjualan_kode' => 'APS4',
                'penjualan_tanggal' => '2024-09-30',
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Solikhin',
                'penjualan_kode' => 'APS5',
                'penjualan_tanggal' => '2024-10-2',
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Gio',
                'penjualan_kode' => 'APS6',
                'penjualan_tanggal' => '2024-10-5',
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Sania',
                'penjualan_kode' => 'APS7',
                'penjualan_tanggal' => '2024-09-30',
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Joy',
                'penjualan_kode' => 'APS8',
                'penjualan_tanggal' => '2024-09-3',
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Robert',
                'penjualan_kode' => 'APS9',
                'penjualan_tanggal' => '2024-10-2',
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Tifanny',
                'penjualan_kode' => 'APS10',
                'penjualan_tanggal' => '2024-09-30',
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
        
    }
}
