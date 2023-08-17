<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::orderBy('created_at', 'desc')->paginate(10);

        return view('user.barang', compact('barang'));
    }

    public function adminIndex(){
        $barang = Barang::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.barang', compact('barang'));
    }

    public function create(){
        return view('admin.barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_barang' => 'required',
            'kategori' => 'required',
            'merek' => 'required',
            'jumlah_barang' => 'required',
            'tanggal_masuk' => 'required',
            'kondisi_barang' => 'required',
        ]);

        Barang::create([
            'jenis_barang' => $request->jenis_barang,
            'kategori' => $request->kategori,
            'merek' => $request->merek,
            'jumlah_barang' => $request->jumlah_barang,
            'tanggal_masuk' => $request->tanggal_masuk,
            'kondisi_barang' => $request->kondisi_barang,
        ]);

        return redirect()->route('admin.barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'jenis_barang' => 'required',
            'kategori' => 'required',
            'merek' => 'required',
            'jumlah_barang' => 'required',
            'tanggal_masuk' => 'required',
            'kondisi_barang' => 'required',
        ]);


        $barang = Barang::find($id);

        $barang->update([
            'jenis_barang' => $request->jenis_barang,
            'kategori' => $request->kategori,
            'merek' => $request->merek,
            'jumlah_barang' => $request->jumlah_barang,
            'tanggal_masuk' => $request->tanggal_masuk,
            'kondisi_barang' => $request->kondisi_barang,
        ]);

        return redirect()->route('admin.barang.index')->with('success', 'Barang berhasil diupdate');
    }

    public function destroy(String $id)
    {
        $barang = Barang::find($id);

        $barang->delete();

        return redirect()->route('admin.barang.index')->with('success', 'Barang berhasil dihapus');
    }

    public function search(Request $request)
    {
        $cari = $request->carifwb;
        $barang = Barang::where('jenis_barang', 'like', '%'.$cari.'%')->paginate(10);
        
        return view('user.barang', compact('barang'));
    }

    public function searchAdmin(Request $request)
    {
        $barang = Barang::where('jenis_barang', 'like', '%'.$request->search.'%')->paginate(10);   
        return view('admin.barang', compact('barang'));
    }

}