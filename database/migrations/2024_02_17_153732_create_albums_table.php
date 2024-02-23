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
        Schema::create('album', function (Blueprint $table) {
            $table->id('albumId');
            $table->string('namaAlbum');
            $table->text('deskripsi');
            $table->timestamp('tanggalDibuat');
            $table->unsignedBigInteger('userId');

            $table->foreign('userId')->references('userId')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album');
    }
};
