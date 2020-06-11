<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'nome_fantasia'=>'required',
            'razao_social'=>'required|max:200',
            'tipo'=>'required',
            'identificacao'=>'required',
            'pais'=>'required|max:2',
            'estado'=>'required|max:2',
            'cidade'=>'required|max:100',
            'bairro'=>'required|max:100',
            'rua'=>'required|max:100',
            'CEP'=>'required|min:9|max:11',
            'numero'=>'required|numeric' 
        ];
    }
}
