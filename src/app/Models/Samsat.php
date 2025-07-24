<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Samsat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'kota',

    ];

    /**
     * Relasi ke PendaftaranSim
     */
    public function pendaftaranSims(): HasMany
    {
        return $this->hasMany(PendaftaranSim::class);
    }
}
