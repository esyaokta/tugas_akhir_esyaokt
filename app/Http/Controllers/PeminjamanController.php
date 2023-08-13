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

        // date now
        $now = date('Y-m-d H:i:s');

        if($request->tanggal_pinjam < $now){
            return redirect()->back()->withErrors('Tanggal peminjaman tidak valid');
        }

        // jam kerja
        $jam_mulai_kerja = '08:00:00';
        $jam_selesai_kerja = '16:00:00';

        if($request->jam_pinjam > $request->jam_selesai || $request->jam_pinjam < $jam_mulai_kerja || $request->jam_selesai > $jam_selesai_kerja || $request->jam_pinjam > $jam_selesai_kerja || $request->jam_selesai < $jam_mulai_kerja){
            return redirect()->back()->withErrors('Jam peminjaman harus diantara jam kerja');
        }

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