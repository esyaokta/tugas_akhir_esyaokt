<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Controllers\Controller;


class NotificationController extends Controller
{
        public function showPemberitahuan()
    {
        $persetujuan = ['Disetujui', 'Ditolak', 'Menunggu']; // Ubah sesuai persetujuan yang ingin ditampilkan

        $notifikasi = Peminjaman::whereIn('persetujuan', $persetujuan)->get();

        return view('user.pemberitahuan', compact('notifikasi'));
    }

}