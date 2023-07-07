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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('foto');
            $table->string('judul');
            $table->string('keterangan');
            $table->date('tanggal')->nullable();
            $table->longText('deskripsi');
            $table->longText('files')->nullable();
            $table->string('foto_id')->nullable();
            $table->string('kategori');
            $table->unsignedInteger('likes_count')->default(0); // Kolom untuk melacak jumlah suka
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
        Schema::dropIfExists('blogs');
    }
};
