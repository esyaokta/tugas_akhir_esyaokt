<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function search(Request $req) {
        $users = User::where('nama', 'like', '%'.$req->search.'%')->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'nim' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'cekkode' => 'required|numeric',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil ditambahkan');
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
        $validated = $request->validate([
            'nama' => 'required|string',
            'username' => 'required|string',
            'nim' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'cekkode' => 'required|numeric',
        ]);

        $user = User::findOrFail($id);

        $user->update($validated);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User berhasil dihapus');
    }
}