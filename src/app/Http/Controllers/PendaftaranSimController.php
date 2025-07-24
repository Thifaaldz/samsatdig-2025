<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranSim;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PendaftaranSimController extends Controller
{
    public function cetak($id)
    {
        $data = PendaftaranSim::with('samsat')->findOrFail($id); // lebih aman pakai eager load
        $pdf = Pdf::loadView('pdf.pendaftaran', compact('data'))->setPaper('A4', 'portrait');

        return $pdf->stream('pendaftaran-' . $data->nik . '.pdf');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|string|size:16',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'golongan_darah' => 'required|in:A,B,AB,O',
            'alamat' => 'required|string',
            'provinsi' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'kode_pos' => 'required|string',
            'nomor_hp' => 'required|string',
            'email' => 'nullable|email',
            'jenis_sim' => 'required|in:SIM A,SIM B,SIM C,SIM D,SIM Internasional',
            'tipe_pendaftaran' => 'required|in:Baru,Perpanjangan',
            'samsat_id' => 'required|exists:samsats,id',
            'waktu_ujian' => 'required|in:08:00,13:00',
            'foto_ktp' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'foto_pas_foto' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'foto_ttd' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'dokumen_kesehatan' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $request->except(['foto_ktp', 'foto_pas_foto', 'foto_ttd', 'dokumen_kesehatan']);

            $data['foto_ktp'] = $request->file('foto_ktp')->store('uploads/ktp', 'public');
            $data['foto_pas_foto'] = $request->file('foto_pas_foto')->store('uploads/pas_foto', 'public');
            $data['foto_ttd'] = $request->file('foto_ttd')->store('uploads/ttd', 'public');
            $data['dokumen_kesehatan'] = $request->file('dokumen_kesehatan')->store('uploads/kesehatan', 'public');

            $pendaftaran = PendaftaranSim::create($data);

            return response()->json([
                'message' => 'Pendaftaran berhasil',
                'data' => $pendaftaran
            ], 201);

        } catch (\Exception $e) {
            Log::error('API Gagal Simpan Pendaftaran SIM: ' . $e->getMessage());

            return response()->json([
                'message' => 'Gagal menyimpan pendaftaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
