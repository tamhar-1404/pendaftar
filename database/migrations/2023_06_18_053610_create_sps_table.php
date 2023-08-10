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
        Schema::create('sps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('deskripsi_1')->nullable(true);
            $table->longText('deskripsi_2')->nullable(true);
            $table->string('sp_1')->nullable(true);
            $table->string('sp_2')->nullable(true);
            $table->string('bukti_1')->nullable(true);
            $table->string('bukti_2')->nullable(true);
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
        Schema::dropIfExists('sps');
    }
};
