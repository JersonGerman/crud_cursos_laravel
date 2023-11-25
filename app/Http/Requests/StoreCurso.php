<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OCILob;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'El titulo del curso no debe tener más de 10 carácteres',
            'description.required' => 'Debe ingresar una descripción del curso'
        ];
    }
}
