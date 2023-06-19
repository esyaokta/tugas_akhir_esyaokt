<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    public function index(){
        return view('user.peminjaman');
    }

    public function store(Request $request){

        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_pinjam' => 'required',
            'jam_pinjam' => 'required',
            'jam_selesai' => 'required',
        ]);

        $user = auth()->user();

        Peminjaman::create([
            'user_id' => $user->id,
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jam_pinjam' => $request->jam_pinjam,
            'jam_selesai' => $request->jam_selesai,
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diajukan');
    }

    public function adminIndex(){
        $peminjaman = Peminjaman::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.peminjaman', compact('peminjaman'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'persetujuan' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->update([
            'persetujuan' => $request->persetujuan,
            'alasan' => $request->alasan,
        ]);

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui');

    }

    public function destroy(String $id)
    {
        Peminjaman::findOrFail($id)->delete();

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman berhasil dihapus');
    }
}