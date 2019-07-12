<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostagemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|max:100',
            'descricao' => 'max:250',
            'detalhes' => 'max:250',
            'slug' => 'required|max:100',
            'imagem' => 'required|max:100',
            'tags' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute não pode ficar vazio.',
            'max' => 'O campo :attribute não pode exceder o tamanho de :max caracteres.',
        ];
    }
}
