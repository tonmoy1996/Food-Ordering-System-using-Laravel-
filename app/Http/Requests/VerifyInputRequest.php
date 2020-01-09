<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyInputRequest extends FormRequest
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
            'myname' => 'required|min:4',
            'myemail' => 'required|same:myname'
        ];
    }

    public function messages()
    {
        return [
            'myname.required' => 'Name cannot be empty',
            'myname.min' => 'Name should be at least 4 characters long',
        ];
    }
}
