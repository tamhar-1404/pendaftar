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
        Schema::create('aprovals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tempat')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('kelas')->nullable();
            $table->string('nisn')->unique();
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('alamat')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('magang_awal')->nullable();
            $table->string('magang_akhir')->nullable();
            $table->string('foto_siswa');
            $table->string('sp_diri')->nullable();
            $table->string('sp_ortu')->nullable();
            $table->string('skck')->nullable();
            $table->string('cv')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no');
            $table->string('role')->default('siswa');
            $table->string('status')->default('menunggu');
            $table->rememberToken();
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
        Schema::dropIfExists('aprovals');
    }
};
