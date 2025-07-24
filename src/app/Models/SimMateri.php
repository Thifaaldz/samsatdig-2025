<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimMateri extends Model
{
    use HasFactory;

    protected $table = 'sim_materi';

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'video_url',
        'file_path',
    ];
}
