<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'genre' => 'required|max:100',
            'status' => 'required|in:Completed,Playing,Upcoming',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}