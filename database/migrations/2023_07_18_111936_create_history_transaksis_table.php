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
        Schema::create('history_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('rfid');
            $table->string('name');
            $table->string('foto');
            $table->string('harga');
            $table->string('stok');
            $table->string('total');
            $table->string('tanggal');
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
        Schema::dropIfExists('history_transaksis');
    }
};
