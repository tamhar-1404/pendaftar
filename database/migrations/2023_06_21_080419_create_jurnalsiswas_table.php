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
            $table->foreignId('siswa_id')->constrained('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal');
            $table->longText('kegiatan');
            $table->string('image');
            $table->string('status');
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
