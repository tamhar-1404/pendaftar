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
        Schema::create('approval_izins', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('sekolah');
            $table->string('email');
            $table->date('dari');
            $table->date('sampai');
            $table->string('keterangan');
            $table->string('deskripsi');
            $table->string('bukti');
            $table->string('status');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('approval_izins');
    }
};
