<?php

namespace App\Rules;

use App\Models\Aproval;
use App\Models\Siswa;
use Illuminate\Contracts\Validation\Rule;

class NisnRule implements Rule
{

    /**
     * passes
     *
     * @param  mixed $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return !Aproval::where('nisn', $value)->exists() || !Siswa::where('nisn', $value)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'NISN Sudah digunakan.';
    }
}
