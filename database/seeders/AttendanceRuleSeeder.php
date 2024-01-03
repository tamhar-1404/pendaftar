<?php

namespace Database\Seeders;

use App\Enums\DayEnum;
use App\Models\AttendanceRule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendanceRule::query()
            ->create([
                'day' => DayEnum::MONDAY->value,
                'checkin_starts' => '07:00:00',
                'checkin_ends' => '08:00:00',
                'break_starts' => '12:00:00',
                'break_ends' => '12:30:00',
                'break_ends' => '12:30:00',
                'return_starts' => '12:30:00',
                'return_ends' => '13:00:00',
                'checkout_starts' => '16:00:00',
                'checkout_ends' => '20:00:00',
            ]);
        AttendanceRule::query()
            ->create([
                'day' => DayEnum::TUESDAY->value,
                'checkin_starts' => '07:00:00',
                'checkin_ends' => '08:00:00',
                'break_starts' => '12:00:00',
                'break_ends' => '12:30:00',
                'break_ends' => '12:30:00',
                'return_starts' => '12:30:00',
                'return_ends' => '13:00:00',
                'checkout_starts' => '16:00:00',
                'checkout_ends' => '20:00:00',
            ]);
        AttendanceRule::query()
            ->create([
                'day' => DayEnum::WEDNESDAY->value,
                'checkin_starts' => '07:00:00',
                'checkin_ends' => '08:00:00',
                'break_starts' => '12:00:00',
                'break_ends' => '12:30:00',
                'break_ends' => '12:30:00',
                'return_starts' => '12:30:00',
                'return_ends' => '13:00:00',
                'checkout_starts' => '16:00:00',
                'checkout_ends' => '20:00:00',
            ]);
        AttendanceRule::query()
            ->create([
                'day' => DayEnum::THURSDAY->value,
                'checkin_starts' => '07:00:00',
                'checkin_ends' => '08:00:00',
                'break_starts' => '12:00:00',
                'break_ends' => '12:30:00',
                'break_ends' => '12:30:00',
                'return_starts' => '12:30:00',
                'return_ends' => '13:00:00',
                'checkout_starts' => '16:00:00',
                'checkout_ends' => '20:00:00',
            ]);
        AttendanceRule::query()
            ->create([
                'day' => DayEnum::FRIDAY->value,
                'checkin_starts' => '07:00:00',
                'checkin_ends' => '08:00:00',
                'break_starts' => '11:00:00',
                'break_ends' => '12:00:00',
                'break_ends' => '12:00:00',
                'return_starts' => '12:30:00',
                'return_ends' => '13:00:00',
                'checkout_starts' => '16:00:00',
                'checkout_ends' => '20:00:00',
            ]);
    }
}
