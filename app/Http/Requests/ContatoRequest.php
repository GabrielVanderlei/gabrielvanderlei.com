<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
            'nome' => 'required|max:200',
            'email' => 'max:250',
            'celular' => 'max:250',
            'motivo' => 'required|max:100',
            'mensagem' => 'required|max:500',
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
