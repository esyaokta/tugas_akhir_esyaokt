<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;
use App\Http\Controllers\Controller;


class NotificationController extends Controller
{
        public function showPemberitahuan()
    {
        $persetujuan = ['Disetujui', 'Ditolak', 'Menunggu']; // Ubah sesuai persetujuan yang ingin ditampilkan

        $notifikasi = Peminjaman::where('persetujuan', 'Menunggu')->get();

        $userId = auth()->user()->id;

        $notifikasiUserId = Peminjaman::where('user_id', $userId)->get();

        $barang = Barang::orderBy('id', 'desc')->get();

        return view('user.pemberitahuan', compact(['notifikasi', 'barang', 'notifikasiUserId']));
    }

}