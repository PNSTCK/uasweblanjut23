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
        Schema::create('nama', function (Blueprint $table) {
            $table->id();
            $table->String('judul_ujian', 20);
            $table->String('isi_ujian');
            $table->String('penulis_soal', 20);
            $table->String('keterangan');
            $table->integer('tahun_ujian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama');
    }
};
