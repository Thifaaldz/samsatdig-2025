<?php

namespace Database\Seeders;

use App\Models\Samsat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SamsatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Samsat::insert([
            [
                'nama' => 'Samsat Jakarta Timur',
                'alamat' => 'Jl. DI Panjaitan No. 23, Jakarta Timur',
                'kota' => 'Jakarta Timur',
                'provinsi' => 'DKI Jakarta',
            ],
            [
                'nama' => 'Samsat Bandung',
                'alamat' => 'Jl. Soekarno Hatta No. 123, Bandung',
                'kota' => 'Bandung',
                'provinsi' => 'Jawa Barat',
            ],
        ]);
    }
}
