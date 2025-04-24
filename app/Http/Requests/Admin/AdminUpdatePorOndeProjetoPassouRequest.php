<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdatePorOndeProjetoPassouRequest extends FormRequest
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
            'description' => '',
            'tipo' => 'required|string|in:imagem,youtube',
            'iframe_url' => $this->request->get('tipo') === 'youtube' ? 'required' : ''
        ];
    }

    public function messages()
    {
        return [
            'tipo.required' => 'O campo tipo é obrigatório.',
            'tipo.string' => 'O campo tipo deve ser uma string.',
            'tipo.in' => 'O campo tipo deve ser um dos seguintes valores: imagem, youtube.',
            'iframe_url.required_if' => 'O campo Link Iframe é obrigatório quando o tipo é youtube.',
        ];
    }

    public function attributes()
    {
        return [
            'description' => 'Descrição',
            'tipo' => 'Tipo',
            'iframe_url' => 'URL do iframe',
        ];
    }

}
