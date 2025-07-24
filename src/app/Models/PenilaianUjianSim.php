<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianUjianSim extends Model
{
    use HasFactory;

    protected $fillable = [
        'pendaftaran_sim_id',
        'nilai_per_materi',
        'catatan_petugas',
    ];

    protected $casts = [
        'nilai_per_materi' => 'array',
    ];

    public function pendaftaranSim()
    {
        return $this->belongsTo(PendaftaranSim::class);
    }
}
