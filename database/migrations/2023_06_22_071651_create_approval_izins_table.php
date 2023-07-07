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
            $table->string('nama')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('email')->nullable();
            $table->date('dari')->nullable();
            $table->date('sampai')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('bukti')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
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
