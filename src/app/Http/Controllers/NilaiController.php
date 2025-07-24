<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranSim;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.cek', ['pendaftaran' => null]);
    }

    public function cari(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $pendaftaran = PendaftaranSim::where('nama_lengkap', 'like', '%' . $request->nama . '%')
            ->with('penilaian')
            ->first();

        if ($pendaftaran && $pendaftaran->penilaian) {
            $pendaftaran->penilaian->nilai_per_materi = json_decode($pendaftaran->penilaian->nilai_per_materi, true);
        }

        return view('nilai.cek', compact('pendaftaran'));
    }
}
