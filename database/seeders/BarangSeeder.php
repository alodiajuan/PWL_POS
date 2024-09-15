<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 10,
                'barang_kode' => 'TH',
                'barang_nama' => 'Teh',
                'harga_beli' => 2600,
                'harga_jual' => 3000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 10,
                'barang_kode' => 'KP',
                'barang_nama' => 'Kopi',
                'harga_beli' => 4300,
                'harga_jual' => 5000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 10,
                'barang_kode' => 'SS',
                'barang_nama' => 'Susu',
                'harga_beli' => 6700,
                'harga_jual' => 7500,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 11,
                'barang_kode' => 'RT',
                'barang_nama' => 'Roti',
                'harga_beli' => 3200,
                'harga_jual' => 4000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 11,
                'barang_kode' => 'SOS',
                'barang_nama' => 'Sosis',
                'harga_beli' => 8800,
                'harga_jual' => 9500,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 11,
                'barang_kode' => 'MIN',
                'barang_nama' => 'Mi Instan',
                'harga_beli' => 2700,
                'harga_jual' => 3000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 12,
                'barang_kode' => 'CTT',
                'barang_nama' => 'Chitato',
                'harga_beli' => 8900,
                'harga_jual' => 10000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 12,
                'barang_kode' => 'PTB',
                'barang_nama' => 'Potabee',
                'harga_beli' => 7600,
                'harga_jual' => 9500,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 12,
                'barang_kode' => 'PGD',
                'barang_nama' => 'Pilus Garuda',
                'harga_beli' => 6500,
                'harga_jual' => 7500,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 13,
                'barang_kode' => 'BRS',
                'barang_nama' => 'Beras',
                'harga_beli' => 9700,
                'harga_jual' => 10500,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 13,
                'barang_kode' => 'TLR',
                'barang_nama' => 'Telur',
                'harga_beli' => 28000,
                'harga_jual' => 32000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 13,
                'barang_kode' => 'MYK',
                'barang_nama' => 'Minyak',
                'harga_beli' => 17000,
                'harga_jual' => 20000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 14,
                'barang_kode' => 'AIC',
                'barang_nama' => 'Aice Strawberry',
                'harga_beli' => 2600,
                'harga_jual' => 3000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 14,
                'barang_kode' => 'MCK',
                'barang_nama' => 'Millo Coklat',
                'harga_beli' => 3500,
                'harga_jual' => 4000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 14,
                'barang_kode' => 'PDP',
                'barang_nama' => 'Pedelpop Pelangi',
                'harga_beli' => 1600,
                'harga_jual' => 2000,
                'created_at' => now(),
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
