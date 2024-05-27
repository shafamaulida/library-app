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
        Schema::create('t_siswa', function (Blueprint $table) {
            $table->integer('nis')->primary();
            $table->string('nama_lengkap', 100);
            $table->string('jenis_kelamin', 1);
            $table->text('alamat');
            $table->string('no_telp');
            $table->integer('id_kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('t_siswa');
    }
};
