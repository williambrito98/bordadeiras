<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AdminStoreBordadeirasRequest extends FormRequest
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
            'nome' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'cidade' => ['required', 'integer'],
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
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
            'nome.required' => 'O campo nome é obrigatório',
            'content.required' => 'O campo conteúdo é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
            'thumbnail.required' => 'O campo thumbnail é obrigatório',
            'images.*.required' => 'O campo images é obrigatório',
            'banner.required' => 'O campo banner é obrigatório',
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
            'nome' => 'Nome',
            'content' => 'Conteúdo',
            'cidade' => 'Cidade',
            'thumbnail' => 'Thumbnail',
            'images.*' => 'Imagens',
            'banner' => 'Banner',
        ];
    }

}
