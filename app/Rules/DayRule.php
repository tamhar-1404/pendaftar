<?php

namespace App\Rules;

use App\Enums\DayEnum;
use Illuminate\Contracts\Validation\Rule;

class DayRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return in_array($value, [DayEnum::MONDAY->value, DayEnum::TUESDAY->value, DayEnum::WEDNESDAY->value, DayEnum::THURSDAY->value, DayEnum::FRIDAY->value]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hari tidak valid.';
    }
}
