<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'nome' => 'required|min:3|max:255',
            'categoria_id' => 'required',
        ];
    }

    /**
     * Customizando as mensagens
     *
     * @return void
     */
    public function messages()
    {
        return [
            'required'  => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres',
        ];
    }

    /**
     * Customizando o nome dos campos, caso queira colocar acento e escrever de
     * outra forma
     *
     * @return void
     */
    public function attributes()
    {
        return [
            'titulo' => 'título',
            'categoria_id' => 'categoria'
        ];
    }

}
