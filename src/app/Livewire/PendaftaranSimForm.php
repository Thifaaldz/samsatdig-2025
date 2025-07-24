<?php
namespace App\Livewire;

use App\Models\PendaftaranSim;
use App\Models\Samsat;
use Livewire\Component;
use Livewire\WithFileUploads;

class PendaftaranSimForm extends Component
{
    use WithFileUploads;

    public $nik, $nama_lengkap, $tempat_lahir, $tanggal_lahir,
           $jenis_kelamin, $golongan_darah, $alamat,
           $provinsi, $kota_kabupaten, $kecamatan, $kelurahan, $kode_pos,
           $nomor_hp, $email, $jenis_sim, $tipe_pendaftaran, $waktu_ujian,
           $samsat_id;

    public $foto_ktp, $foto_pas_foto, $foto_ttd, $dokumen_kesehatan;

    public function render()
    {
        return view('livewire.pendaftaran-sim-form', [
            'samsats' => Samsat::all(),
        ]);
    }

    protected $rules = [
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
        'foto_ktp' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'foto_pas_foto' => 'required|file|mimes:jpg,jpeg,png',
        'foto_ttd' => 'required|file|mimes:jpg,jpeg,png',
        'dokumen_kesehatan' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'samsat_id' => 'required|exists:samsats,id',
        'waktu_ujian' => 'required|in:08:00,13:00',
    ];

    public function submit()
    {
        $validated = $this->validate();

        // Simpan file
        $validated['foto_ktp'] = $this->foto_ktp->store('ktp', 'public');
        $validated['foto_pas_foto'] = $this->foto_pas_foto->store('pas_foto', 'public');
        $validated['foto_ttd'] = $this->foto_ttd->store('ttd', 'public');
        $validated['dokumen_kesehatan'] = $this->dokumen_kesehatan->store('kesehatan', 'public');

        $pendaftaran = PendaftaranSim::create($validated);

        return redirect()->route('pendaftaran.cetak', ['id' => $pendaftaran->id]);
    }
}
