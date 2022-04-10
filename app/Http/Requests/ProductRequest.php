<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

            'brand' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'code' => 'required|min:2|max:255',
            'price' => 'required|numeric||min:1',


        ];
       if ($this->route()->name(products.store)) {
          $rules['code'] .= '|unique:products,code';
          $rules['image'] .= '|unique:products,image';
       }
       return $rules;
    }
}
