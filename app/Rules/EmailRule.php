<?php

namespace App\Rules;

use App\Models\Aproval;
use App\Models\Guru_admin;
use App\Models\MOU;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class EmailRule implements Rule
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

    public function passes($attribute, $value)
    {
        return (User::where('email', $value)->exists() || Siswa::where('email', $value)->exists() || Guru_admin::where('email', $value)->exists() || MOU::where('email', $value)->exists() || Aproval::where('email', $value)->exists()) ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Email sudah digunakan!';
    }
}
