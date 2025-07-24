<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SimMateri;
use Illuminate\Support\Facades\Validator;

class SimMateriController extends Controller
{
    // Menampilkan semua data materi
    public function index()
    {
        return response()->json([
            'message' => 'Data materi berhasil diambil',
            'data' => SimMateri::all()
        ], 200);
    }

    // Menyimpan materi baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'nullable|string',
            'video_url' => 'nullable|url',
            'file_path' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $materi = SimMateri::create($request->all());

        return response()->json([
            'message' => 'Materi berhasil ditambahkan',
            'data' => $materi
        ], 201);
    }

    // Menampilkan detail 1 materi
    public function show($id)
    {
        $materi = SimMateri::find($id);

        if (!$materi) {
            return response()->json(['message' => 'Materi tidak ditemukan'], 404);
        }

        return response()->json(['data' => $materi], 200);
    }

    // Mengupdate materi
    public function update(Request $request, $id)
    {
        $materi = SimMateri::find($id);

        if (!$materi) {
            return response()->json(['message' => 'Materi tidak ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'judul' => 'sometimes|required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'nullable|string',
            'video_url' => 'nullable|url',
            'file_path' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $materi->update($request->all());

        return response()->json([
            'message' => 'Materi berhasil diperbarui',
            'data' => $materi
        ]);
    }

    // Menghapus materi
    public function destroy($id)
    {
        $materi = SimMateri::find($id);

        if (!$materi) {
            return response()->json(['message' => 'Materi tidak ditemukan'], 404);
        }

        $materi->delete();

        return response()->json(['message' => 'Materi berhasil dihapus']);
    }
}
