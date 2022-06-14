<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name'=>'required',
            'descripcion'=>'required'
        ];
    }

    public function attributes()
    {
        return[
            'name'=>'nombre del curso',
            'descripcion'=>'descripción del curso'
        ];
    }
    public function messages(){
        return[
            'descripcion.required'=>'Debe de ingresar una descrpción del curso'
        ];
    }
}
