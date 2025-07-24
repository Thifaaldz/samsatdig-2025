<?php

namespace App\Http\Controllers;

use App\Models\PenilaianUjianSim;
use Illuminate\Http\Request;

class PenilaianUjianSimController extends Controller
{
    // Constructor kalau mau langsung pasang middleware di controller
    public function __construct()
    {
        // Contoh: middleware auth api
        // $this->middleware('auth:api');
        // atau middleware lain yang sudah kamu buat
    }

    // GET /api/penilaian-ujian-sims
    public function index()
    {
        return response()->json(PenilaianUjianSim::all(), 200);
    }

    // POST /api/penilaian-ujian-sims
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pendaftaran_sim_id' => 'required|exists:pendaftaran_sims,id',
            'nilai_per_materi' => 'nullable|json',
            'catatan_petugas' => 'nullable|string',
        ]);

        $penilaian = PenilaianUjianSim::create($validated);

        return response()->json([
            'message' => 'Penilaian Ujian SIM created successfully',
            'data' => $penilaian,
        ], 201);
    }

    // GET /api/penilaian-ujian-sims/{id}
    public function show($id)
    {
        $penilaian = PenilaianUjianSim::find($id);

        if (!$penilaian) {
            return response()->json(['message' => 'Penilaian Ujian SIM not found'], 404);
        }

        return response()->json($penilaian, 200);
    }

    // PUT /api/penilaian-ujian-sims/{id}
    public function update(Request $request, $id)
    {
        $penilaian = PenilaianUjianSim::find($id);

        if (!$penilaian) {
            return response()->json(['message' => 'Penilaian Ujian SIM not found'], 404);
        }

        $validated = $request->validate([
            'pendaftaran_sim_id' => 'sometimes|required|exists:pendaftaran_sims,id',
            'nilai_per_materi' => 'nullable|json',
            'catatan_petugas' => 'nullable|string',
        ]);

        $penilaian->update($validated);

        return response()->json([
            'message' => 'Penilaian Ujian SIM updated successfully',
            'data' => $penilaian,
        ], 200);
    }

    // DELETE /api/penilaian-ujian-sims/{id}
    public function destroy($id)
    {
        $penilaian = PenilaianUjianSim::find($id);

        if (!$penilaian) {
            return response()->json(['message' => 'Penilaian Ujian SIM not found'], 404);
        }

        $penilaian->delete();

        return response()->json(['message' => 'Penilaian Ujian SIM deleted successfully'], 200);
    }
}
