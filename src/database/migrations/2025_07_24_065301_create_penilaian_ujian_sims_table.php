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
        Schema::create('penilaian_ujian_sims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_sim_id')->constrained()->onDelete('cascade');
    
            // Ganti nilai_teori & praktek menjadi JSON nilai_per_materi
            $table->json('nilai_per_materi')->nullable(); // { materi_id: nilai }
            $table->text('catatan_petugas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_ujian_sims');
    }
};
