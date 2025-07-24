<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSim extends Model
{

    use HasFactory;

    // Nama tabel (opsional jika nama model dan tabel sesuai konvensi)
    protected $table = 'pendaftaran_sims';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'golongan_darah',
        'alamat',
        'provinsi',
        'kota_kabupaten',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'nomor_hp',
        'email',
        'jenis_sim',
        'tipe_pendaftaran',
        'foto_ktp',
        'foto_pas_foto',
        'foto_ttd',
        'dokumen_kesehatan',
        'samsat_id',
        'waktu_ujian',
        'status_pendaftaran',
        'catatan_petugas',
        'tanggal_pendaftaran',
    ];

    // Kolom bertipe date
    protected $dates = [
        'tanggal_lahir',
        'tanggal_pendaftaran',
    ];

    public function samsat()
{
    return $this->belongsTo(Samsat::class);
}

public function penilaian()
{
    return $this->hasOne(\App\Models\PenilaianUjianSim::class);
}

}

