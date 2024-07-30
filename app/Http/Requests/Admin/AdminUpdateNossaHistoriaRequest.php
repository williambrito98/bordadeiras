<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateNossaHistoriaRequest extends FormRequest
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
            'id.*' => 'required|integer',
            'title.*' => 'required|string',
            'content.*' => 'required|string',
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
            'id.*.required' => 'O campo id é obrigatório.',
            'title.*.required' => 'O campo título é obrigatório.',
            'title.*.string' => 'O campo título deve ser uma string.',
            'content.*.required' => 'O campo conteúdo é obrigatório.',
            'content.*.string' => 'O campo conteúdo deve ser uma string.',
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
            'id.*' => 'id',
            'title.*' => 'título',
            'content.*' => 'conteúdo',
        ];
    }
}
