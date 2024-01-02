<?php

namespace App\Http\Requests;

use App\Rules\DayRule;
use Illuminate\Foundation\Http\FormRequest;

class AttendanceRuleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'day' => ['required', new DayRule],
            'checkin_starts' => 'required',
            'checkin_ends' => 'required',
            'break_starts' => 'required',
            'break_ends' => 'required',
            'return_starts' => 'required',
            'return_ends' => 'required',
            'checkout_starts' => 'required',
            'checkout_ends' => 'required',
        ];
    }
}
