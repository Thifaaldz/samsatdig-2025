<?php

namespace App\Http\Controllers;

use App\Models\Samsat;
use Illuminate\Http\Request;

class SamsatController extends Controller
{
    // GET /api/samsats
    public function index()
    {
        return response()->json(Samsat::all(), 200);
    }

    // POST /api/samsats
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
        ]);

        $samsat = Samsat::create($validated);

        return response()->json([
            'message' => 'Samsat created successfully',
            'data' => $samsat
        ], 201);
    }

    // GET /api/samsats/{id}
    public function show($id)
    {
        $samsat = Samsat::find($id);

        if (!$samsat) {
            return response()->json(['message' => 'Samsat not found'], 404);
        }

        return response()->json($samsat, 200);
    }

    // PUT /api/samsats/{id}
    public function update(Request $request, $id)
    {
        $samsat = Samsat::find($id);

        if (!$samsat) {
            return response()->json(['message' => 'Samsat not found'], 404);
        }

        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'alamat' => 'sometimes|required|string|max:255',
            'kota' => 'sometimes|required|string|max:100',
            'provinsi' => 'sometimes|required|string|max:100',
        ]);

        $samsat->update($validated);

        return response()->json([
            'message' => 'Samsat updated successfully',
            'data' => $samsat
        ], 200);
    }

    // DELETE /api/samsats/{id}
    public function destroy($id)
    {
        $samsat = Samsat::find($id);

        if (!$samsat) {
            return response()->json(['message' => 'Samsat not found'], 404);
        }

        $samsat->delete();

        return response()->json(['message' => 'Samsat deleted successfully'], 200);
    }
}
