<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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

            'p_name' => 'required|unique:products',
            'price' => 'required|numeric|min:1',
            'catid' => 'required',
            'image'=> 'mimes:jpeg,jpg,png,gif|required|max:10000'

        ];
    }
}
