<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('Admin.index');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Simulasi penyimpanan (bisa ke database nanti)
        return redirect()->back()->with('success', 'Data admin berhasil disimpan!');
    }
}
