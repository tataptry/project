<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return response()->json(Buku::all());
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => 'required|string',
        'pengarang' => 'required|string',
        'penerbit' => 'required|string',
        'tahun_terbit' => 'required|numeric',
        'kategori' => 'required|string',
    ]);

    $buku = Buku::create($validated);

    return response()->json([
        'success' => true,
        'message' => 'Data buku berhasil ditambahkan',
        'data' => $buku
    ], 201);
}


    public function show($id)
    {
       $buku = Buku::find($id);
    if (!$buku) {
        return response()->json(['message' => 'Data buku tidak ditemukan'], 404);
    }
    return response()->json($buku);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return response()->json($buku);
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return response()->json(null, 204);
    }
}