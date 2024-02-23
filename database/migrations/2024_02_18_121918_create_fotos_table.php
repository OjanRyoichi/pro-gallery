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
        Schema::create('foto', function (Blueprint $table) {
            $table->id('fotoId');
            $table->string('judulFoto');
            $table->string('deskripsi');
            $table->timestamp('tanggalDiunggah');
            $table->string('lokasiFile');
            $table->unsignedBigInteger('albumId')->nullable();
            $table->unsignedBigInteger('userId');

            $table->foreign('userId')->references('userId')->on('users');
            $table->foreign('albumId')->references('albumId')->on('album');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto');
    }
};
