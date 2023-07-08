<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::whereMonth('created_at', date('m'))->orderBy('created_at', 'desc')->paginate(10);
        $peminjaman = Peminjaman::whereMonth('created_at', date('m'))->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.laporan', compact('barang', 'peminjaman'));
    }

    public function dashboard()
    {
        $jumlah_barang = Barang::count();
        $jumlah_peminjaman = Peminjaman::count();

        return view('admin.dashboard', compact('jumlah_barang', 'jumlah_peminjaman'));
    }

    public function cetak()
    {
        $barang = Barang::get();
        $peminjaman = Peminjaman::get();

        $pdf = PDF::loadview('admin.laporan_pdf', compact('barang', 'peminjaman'));
        return $pdf->stream();
    }

    public function search(Request $request)
    {
        $periode = $request->periode;
        $month = Carbon::parse($periode)->format('m');
        $year = Carbon::parse($periode)->format('Y');

        $barang = Barang::whereMonth('tanggal_masuk', $month)->whereYear('tanggal_masuk', $year)->orderBy('created_at', 'desc')->paginate(10);
        $peminjaman = Peminjaman::whereMonth('tanggal_pinjam', $month)->whereYear('tanggal_pinjam', $year)->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.laporan-bulanan', compact('barang', 'peminjaman', 'periode'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
   }
}