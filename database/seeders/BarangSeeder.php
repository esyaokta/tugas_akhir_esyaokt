<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            [
                "id" => 1,
                "jenis_barang" => "meja komputer abu-abu",
                "kategori" => "perabotan kantor",
                "merek" => "tidak ada",
                "jumlah_barang" => 4,
                "tanggal_masuk" => "2022-10-03",
                "tanggal_keluar" => "2022-10-03",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 2,
                "jenis_barang" => "meja komputer putih",
                "kategori" => "perabotan kantor",
                "merek" => "tidak ada",
                "jumlah_barang" => 6,
                "tanggal_masuk" => "2022-10-03",
                "tanggal_keluar" => "2022-10-03",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 3,
                "jenis_barang" => "printer",
                "kategori" => "perabotan elektronik",
                "merek" => "brother",
                "jumlah_barang" => 1,
                "tanggal_masuk" => "2022-10-03",
                "tanggal_keluar" => "2022-10-03",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 4,
                "jenis_barang" => "meja bundar",
                "kategori" => "perabotan kantor",
                "merek" => "tidak ada",
                "jumlah_barang" => 1,
                "tanggal_masuk" => "2022-10-04",
                "tanggal_keluar" => "2022-10-04",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 5,
                "jenis_barang" => "meja kerja",
                "kategori" => "perabotan kantor",
                "merek" => "tidak ada",
                "jumlah_barang" => 1,
                "tanggal_masuk" => "2022-10-03",
                "tanggal_keluar" => "2022-10-03",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 6,
                "jenis_barang" => "monitor",
                "kategori" => "perabotan elektronik",
                "merek" => "LG",
                "jumlah_barang" => 1,
                "tanggal_masuk" => "2022-10-04",
                "tanggal_keluar" => "2022-10-04",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 7,
                "jenis_barang" => "AC",
                "kategori" => "perabotan elektronik",
                "merek" => "Daikin",
                "jumlah_barang" => 1,
                "tanggal_masuk" => "2022-10-04",
                "tanggal_keluar" => "2022-10-04",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 8,
                "jenis_barang" => "binbag",
                "kategori" => "perabotan kantor",
                "merek" => "tidak ada",
                "jumlah_barang" => 3,
                "tanggal_masuk" => "2022-10-11",
                "tanggal_keluar" => "2022-10-11",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 9,
                "jenis_barang" => "Microwave",
                "kategori" => "perabotan elektronik",
                "merek" => "sharp",
                "jumlah_barang" => 1,
                "tanggal_masuk" => "2022-10-04",
                "tanggal_keluar" => "2022-10-04",
                "kondisi_barang" => "baik"
            ],
            [
                "id" => 10,
                "jenis_barang" => "lemari loker",
                "kategori" => "perabotan kantor",
                "merek" => "tidak ada",
                "jumlah_barang" => 2,
                "tanggal_masuk" => "2022-01-11",
                "tanggal_keluar" => "2022-01-11",
                "kondisi_barang" => "baik"
            ],
        ];

        foreach ($barang as $key => $value) {
            \App\Models\Barang::create($value);
        }
    }
}
