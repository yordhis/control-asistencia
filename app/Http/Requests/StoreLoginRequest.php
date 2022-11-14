<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:55',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Name* es obligatorio',
            'password.required' => 'El campo Password* es obligatorio'
        ];
    }
    
    // public function attributes()
    // {
    //     return [
    //         'name' => 'El campo Name* es obligatorio',
    //         'password' => 'El campo Password* es obligatorio'
    //     ];
    // }
   
}
