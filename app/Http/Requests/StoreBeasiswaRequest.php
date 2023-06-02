<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $posts = [
            'title' => ['required'],
            'slug' => ['required'],
            'image' => ['image', 'file', 'max:2048', 'required'],
            'beasiswa' => ['required'],
        ];

        return $posts;
    }
}
