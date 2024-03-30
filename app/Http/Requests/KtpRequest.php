<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KtpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nik' => ['required', 'numeric', 'min:10', 'unique:ktp,nik'],
            'name' => ['required', 'min:5', 'max:100'],
            'file' => ['required', 'file', 'mimes:png,jpg,jpeg']
        ];
    }
}
