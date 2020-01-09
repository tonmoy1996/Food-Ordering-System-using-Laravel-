<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class makeuser extends FormRequest
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
            
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'image'=> 'mimes:jpeg,jpg,png,gif|required|max:10000'



        ];
    }
}
