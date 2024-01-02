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
        Schema::create('attendance_rules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('day', [DayEnum::SUNDAY->value, DayEnum::MONDAY->value, DayEnum::TUESDAY->value, DayEnum::WEDNESDAY->value, DayEnum::THURSDAY->value, DayEnum::FRIDAY->value , DayEnum::SATURDAY->value]);
            $table->time('checkin_starts');
            $table->time('checkin_ends');
            $table->time('break_starts');
            $table->time('break_ends');
            $table->time('return_starts');
            $table->time('return_ends');
            $table->time('checkout_starts');
            $table->time('checkout_ends');
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
        Schema::dropIfExists('attendance_rules');
    }
};
