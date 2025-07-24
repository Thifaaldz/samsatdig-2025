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
        Schema::create('sim_materi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('kategori')->nullable(); // Teori, Etika, dll
            $table->string('video_url')->nullable();
            $table->string('file_path')->nullable(); // untuk PDF/DOC
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sim_materis');
    }
};
