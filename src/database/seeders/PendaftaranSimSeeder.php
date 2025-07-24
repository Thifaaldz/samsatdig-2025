<?php

namespace Database\Seeders;

use App\Models\PendaftaranSim;
use App\Models\Samsat;
use Illuminate\Database\Seeder;

class PendaftaranSimSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        // Pastikan ada minimal 1 samsat
        $samsats = Samsat::pluck('id')->toArray();

        if (count($samsats) === 0) {
            $this->command->warn('Seeder Samsat belum ada. Jalankan SamsatSeeder terlebih dahulu.');
            return;
        }

        for ($i = 1; $i <= 10; $i++) {
            PendaftaranSim::create([
                'nik' => $faker->numerify('317###########'),
                'nama_lengkap' => $faker->name(),
                'tempat_lahir' => $faker->city(),
                'tanggal_lahir' => $faker->date('Y-m-d', '-17 years'),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'golongan_darah' => $faker->randomElement(['A', 'B', 'AB', 'O']),
                'alamat' => $faker->address(),
                'provinsi' => $faker->state(),
                'kota_kabupaten' => $faker->city(),
                'kecamatan' => $faker->citySuffix(),
                'kelurahan' => $faker->streetName(),
                'kode_pos' => $faker->postcode(),
                'nomor_hp' => $faker->phoneNumber(),
                'email' => $faker->safeEmail(),
                'jenis_sim' => $faker->randomElement(['SIM A', 'SIM B', 'SIM C', 'SIM D', 'SIM Internasional']),
                'tipe_pendaftaran' => $faker->randomElement(['Baru', 'Perpanjangan']),
                'foto_ktp' => 'dummy/foto_ktp.jpg',
                'foto_pas_foto' => 'dummy/pas_foto.jpg',
                'foto_ttd' => 'dummy/ttd.jpg',
                'dokumen_kesehatan' => 'dummy/surat_sehat.pdf',
                'samsat_id' => $faker->randomElement($samsats),
                'waktu_ujian' => $faker->randomElement(['08:00', '13:00']),
                'tanggal_pendaftaran' => now()->subDays(rand(0, 30)),
                'status_pendaftaran' => $faker->randomElement(['Pending', 'Diproses', 'Disetujui', 'Ditolak']),
                'catatan_petugas' => $faker->boolean() ? $faker->sentence() : null,
            ]);
        }
    }
}
