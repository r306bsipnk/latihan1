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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 16)->unique();
            $table->string('nama_lengkap', 90)->nullable(false);
            $table->enum('gender', ['L', 'P'])->nullable(true);
            $table->date('tanggal_lahir')->nullable(true);
            $table->string('email', 255)->nullable(true);
            $table->string('password', 64);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
