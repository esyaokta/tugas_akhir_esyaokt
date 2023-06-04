<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        return view('user.barang');
    }

    public function adminIndex(){
        return view('admin.barang');
    }

    public function create(){
        return view('admin.barang.create');
    }

}