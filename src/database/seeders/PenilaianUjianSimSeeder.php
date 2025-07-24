<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenilaianUjianSim;
use App\Models\PendaftaranSim;
use Illuminate\Support\Facades\DB;

class PenilaianUjianSimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil 5 data pendaftaran SIM yang sudah ada
        $pendaftarans = PendaftaranSim::inRandomOrder()->limit(5)->get();

        foreach ($pendaftarans as $pendaftaran) {
            PenilaianUjianSim::create([
                'pendaftaran_sim_id' => $pendaftaran->id,
                'nilai_per_materi' => json_encode([
                    1 => rand(60, 100), // Materi ID 1
                    2 => rand(60, 100), // Materi ID 2
                    3 => rand(60, 100), // dst
                ]),
                'catatan_petugas' => fake()->sentence(),
            ]);
        }
    }
}
