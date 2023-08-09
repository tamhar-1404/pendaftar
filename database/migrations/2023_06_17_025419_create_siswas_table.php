<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('status_sp')->nullable();
            $table->string('foto_siswa')->nullable();
            $table->string('kelas')->nullable();
            $table->string('tempat')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('sekolah')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('nisn')->nullable();
            $table->string('no')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('magang_awal')->nullable();
            $table->string('magang_akhir')->nullable();
            $table->string('email')->nullable();
            $table->string('role')->default('Siswa');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
