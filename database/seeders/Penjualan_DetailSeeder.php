<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Penjualan_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => '1',
                'barang_id' => 1,
                'harga' => 3000,
                'jumlah' => 6,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 1,
                'harga' => 3000,
                'jumlah' => 4,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 1,
                'harga' => 3000,
                'jumlah' => 1,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 5000,
                'jumlah' => 3,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 2,
                'harga' => 5000,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 5000,
                'jumlah' => 3,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 3,
                'harga' => 7500,
                'jumlah' => 4,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 7500,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 3,
                'harga' => 7500,
                'jumlah' => 1,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 4,
                'harga' => 4000,
                'jumlah' => 5,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 4,
                'harga' => 4000,
                'jumlah' => 5,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 4000,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 5,
                'harga' => 9500,
                'jumlah' => 3,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 5,
                'harga' => 9500,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 9500,
                'jumlah' => 1,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 6,
                'harga' => 3000,
                'jumlah' => 8,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 6,
                'harga' => 3000,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' =>7,
                'harga' => 10000,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 7,
                'harga' => 10000,
                'jumlah' => 1,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 8,
                'harga' => 9500,
                'jumlah' => 3,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 7500,
                'jumlah' => 3,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 9,
                'harga' => 7500,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 10,
                'harga' => 10500,
                'jumlah' => 3,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 11,
                'harga' => 32000,
                'jumlah' => 1,
                'created_at' => now(),
            ],            [
                'penjualan_id' => 7,
                'barang_id' =>12,
                'harga' => 20000,
                'jumlah' => 2,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 13,
                'harga' => 3000,
                'jumlah' => 5,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 14,
                'harga' => 4000,
                'jumlah' => 6,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 15,
                'harga' => 2000,
                'jumlah' => 10,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 15,
                'harga' => 2000,
                'jumlah' => 4,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 13,
                'harga' => 3000,
                'jumlah' => 4,
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
