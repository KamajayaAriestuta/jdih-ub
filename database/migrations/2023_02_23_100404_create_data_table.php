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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('perihal');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('nomor');
            $table->string('nomor_perundangan');
            $table->string('tahun');
            $table->date('tanggal_ditetapkan');
            $table->date('tanggal_diundangkan');
            $table->string('kaitan');
            $table->string('file_upload');
            $table->foreignId('status_id')->constrained('status');
            $table->boolean('rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
