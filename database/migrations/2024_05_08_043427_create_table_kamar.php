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
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar', 9);
            $table->text('deskripsi_kamar')->nullable(true);
            $table->text('fasilitas')->nullable(true);
            $table->enum('status', ['KOSONG', 'TERISI', 'RENOVASI']);
            $table->unsignedBigInteger('pemilik_id');    
            $table->timestamps();
            $table->unique(['nomor_kamar', 'pemilik_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
