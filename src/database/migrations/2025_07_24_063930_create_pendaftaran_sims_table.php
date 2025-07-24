<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_sims', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->string('nomor_hp');
            $table->string('email')->nullable();
            $table->enum('jenis_sim', ['SIM A', 'SIM B', 'SIM C', 'SIM D', 'SIM Internasional']);
            $table->enum('tipe_pendaftaran', ['Baru', 'Perpanjangan']);
            $table->string('foto_ktp');
            $table->string('foto_pas_foto');
            $table->string('foto_ttd');
            $table->string('dokumen_kesehatan');
            $table->foreignId('samsat_id')->constrained();
            $table->enum('waktu_ujian', ['08:00', '13:00']);
            $table->timestamp('tanggal_pendaftaran')->useCurrent();
            $table->enum('status_pendaftaran', ['Pending', 'Diproses', 'Disetujui', 'Ditolak'])->default('Pending');
            $table->text('catatan_petugas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_sims');
    }
};
