<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'stream_date' => 'required|date',
            'stream_time' => 'required',
            'description' => 'nullable|max:1000',
        ];
    }
}