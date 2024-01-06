<?php

use App\Enums\DayEnum;
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
        Schema::create('diligent_students', function (Blueprint $table) {
            $table->id();
            $table->enum('day', [DayEnum::MONDAY->value, DayEnum::TUESDAY->value, DayEnum::WEDNESDAY->value, DayEnum::THURSDAY->value, DayEnum::FRIDAY->value]);
            $table->foreignId('attendance_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('diligent_students');
    }
};
