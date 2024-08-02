<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateNoticiasRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'site_url' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'O campo título é obrigatório.',
            'title.string' => 'O campo título deve ser uma string.',
            'title.max' => 'O campo título deve ter no máximo 255 caracteres.',
            'site_url.required' => 'O campo site é obrigatório.',
            'site_url.string' => 'O campo site deve ser uma string.',
            'site_url.max' => 'O campo site deve ter no máximo 255 caracteres.',
            'subtitle.required' => 'O campo subtítulo é obrigatório.',
            'subtitle.string' => 'O campo subtítulo deve ser uma string.',
            'subtitle.max' => 'O campo subtítulo deve ter no máximo 255 caracteres.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'título',
            'site_url' => 'site',
            'subtitle' => 'subtítulo',
        ];
    }
}
