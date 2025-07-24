<?php

namespace Database\Seeders;

use App\Models\SimMateri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SimMateri::insert([
            [
                'judul' => 'Pengenalan Rambu Lalu Lintas',
                'deskripsi' => 'Penjelasan lengkap tentang jenis-jenis rambu lalu lintas yang umum ditemui di jalan.',
                'kategori' => 'Rambu',
                'video_url' => 'https://www.youtube.com/embed/psL_5RIBqnY',
                'file_path' => 'materi-files/rambu.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Etika Berkendara yang Baik dan Benar',
                'deskripsi' => 'Materi mengenai sikap dan etika saat mengendarai kendaraan bermotor di jalan raya.',
                'kategori' => 'Etika',
                'video_url' => 'https://www.youtube.com/embed/JZzxe_H6TZs',
                'file_path' => 'materi-files/etika.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Teknik Pengereman Darurat',
                'deskripsi' => 'Simulasi dan penjelasan cara melakukan pengereman yang aman dan efektif.',
                'kategori' => 'Teknik',
                'video_url' => 'https://www.youtube.com/embed/Bk6bO8jkMgs',
                'file_path' => 'materi-files/pengereman.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
