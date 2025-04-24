<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminStorePorOndeProjetoPassouRequest extends FormRequest
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
        // o campo iframe_url so é valido e o campo tipo for igual a youtube
        return [
            'description' => '',
            'tipo' => 'required|string|in:imagem,youtube',
            'iframe_url' => $this->request->get('tipo') === 'youtube' ? 'required' : '',
            'src' => $this->request->get('tipo') === 'imagem' ? 'required|image|mimes:jpeg,png,jpg,gif' : '',
        ];
    }

    public function messages()
    {
        return [
            'tipo.required' => 'O campo tipo é obrigatório.',
            'tipo.string' => 'O campo tipo deve ser uma string.',
            'tipo.in' => 'O campo tipo deve ser um dos seguintes valores: imagem, youtube.',
            'iframe_url.required_if' => 'O campo Link Iframe é obrigatório quando o tipo é youtube.',
            'src.required_if' => 'O campo Imagem é obrigatório quando o tipo é imagem.',
            'src.image' => 'O campo Imagem deve ser uma imagem.',
            'src.mimes' => 'O campo Imagem deve ser um dos seguintes formatos: jpeg, png, jpg, gif.',
        ];
    }

    public function attributes()
    {
        return [
            'tipo' => 'Tipo',
            'iframe_url' => 'URL do iframe',
            'src' => 'Imagem',
        ];
    }

}
