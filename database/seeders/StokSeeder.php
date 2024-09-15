<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'barang_id' => 1,
                'user_id' => 3,
                'stok_tanggal' => '2024-09-2',
                'stok_jumlah' => 100,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 2,
                'user_id' => 2,
                'stok_tanggal' => '2024-09-1',
                'stok_jumlah' => 75,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2024-09-12',
                'stok_jumlah' => 43,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => '2024-09-15',
                'stok_jumlah' => 36,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 5,
                'user_id' => 3,
                'stok_tanggal' => '2024-09-19',
                'stok_jumlah' => 87,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 6,
                'user_id' => 1,
                'stok_tanggal' => '2024-08-24',
                'stok_jumlah' => 136,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 7,
                'user_id' => 2,
                'stok_tanggal' => '2024-08-29',
                'stok_jumlah' => 43,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 8,
                'user_id' => 2,
                'stok_tanggal' => '2024-09-18',
                'stok_jumlah' => 79,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 9,
                'user_id' => 2,
                'stok_tanggal' => '2024-09-17',
                'stok_jumlah' => 89,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 10,
                'user_id' => 2,
                'stok_tanggal' => '2024-09-2',
                'stok_jumlah' => 92,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 11,
                'user_id' => 1,
                'stok_tanggal' => '2024-08-21',
                'stok_jumlah' => 28,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 12,
                'user_id' => 3,
                'stok_tanggal' => '2024-09-13',
                'stok_jumlah' => 63,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 13,
                'user_id' => 2,
                'stok_tanggal' => '2024-09-16',
                'stok_jumlah' => 67,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 14,
                'user_id' => 1,
                'stok_tanggal' => '2024-09-9',
                'stok_jumlah' => 56,
                'created_at' => now(),
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 15,
                'user_id' => 1,
                'stok_tanggal' => '2024-08-19',
                'stok_jumlah' => 97,
                'created_at' => now(),
            ],
        ];
        DB::table('t_stok')->insert($data);
        
    }
}
