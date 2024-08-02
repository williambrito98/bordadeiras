<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreNoticiasRequest extends FormRequest
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
            'subtitle' => 'required|string|max:255',
            'site_url' => 'required|string|max:255',
            'image_url' => 'required|file|mimes:gif,jpg,jpeg,png|max:12288',
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
            'title.required' => 'O campo título é obrigatório',
            'subtitle.required' => 'O campo subtítulo é obrigatório',
            'site_url.required' => 'O campo site é obrigatório',
            'image_url.required' => 'O campo :attribute é obrigatório.',
            'image_url.file' => 'O campo :attribute deve ser um arquivo.',
            'image_url.mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
            'image_url.max' => 'O campo :attribute deve ter no máximo :max kilobytes.',
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
            'title' => 'Título',
            'subtitle' => 'Subtítulo',
            'site_url' => 'Site URL',
            'image_url' => 'Imagens',
        ];
    }

}
