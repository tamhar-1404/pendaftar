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
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nisn')->nullable();
            $table->string('no')->nullable();
            $table->string('jk')->nullable();
            $table->string('awal')->nullable();
            $table->string('akhir')->nullable();
            $table->string('email')->nullable();
            $table->string('role')->nullable();
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
