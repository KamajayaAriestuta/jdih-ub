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
        Schema::create('instruksi', function (Blueprint $table) {
            $table->id();
            $table->string('perihal');
            $table->string('nomor');
            $table->string('tahun');
            $table->date('tanggal_ditetapkan');
            $table->string('file_upload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instruksi');
    }
};
