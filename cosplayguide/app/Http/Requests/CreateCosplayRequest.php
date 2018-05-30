<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCosplayRequest extends FormRequest
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

          'name' => 'required|min:2',
          'name_serie' => 'required|min:2',
          'photo_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ];
    }
}
