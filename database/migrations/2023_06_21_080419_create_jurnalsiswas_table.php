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
        Schema::create('jurnalsiswas', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->date('tanggal');
            $table->String('sekolah');
            $table->String('kegiatan');
            $table->String('image');
            $table->String('status');
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
        Schema::dropIfExists('jurnalsiswas');
    }
};
