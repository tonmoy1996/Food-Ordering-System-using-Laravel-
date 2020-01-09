<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createordercheck extends FormRequest
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
            
       
            'cname' => 'required',
            'mob' => 'required|numeric|min:11',
            'email' => 'required|email',
            'add'=> 'required'

        ];
    }


    public function messages()
    {
        return [
            'cname.required' => 'Name cannot be empty',
            'mob.required' => 'Mobile cannot be empty',
            'email.required' => 'Email cannot be empty',
            'add.required' => 'Address cannot be empty',
            'mob.min' => 'Number length should be 11 characters long',
            
            'email.email' => 'Plz give valid input',

        ];
    }
}
