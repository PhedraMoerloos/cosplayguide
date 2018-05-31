<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCosplayphotoRequest extends FormRequest
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

          'photo_url' => 'required',
          'photo_url.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048'

        ];



    }


    public function messages()
    {
        return [
            'photo_url.required' => 'Upload min 1 foto',
            'photo_url.*.image'  => "Één van je bestanden is geen foto.",
            'photo_url.*.mimes'  => "Één van je bestanden is niet van het type .jpeg, .jpg, .png of .svg",
            'photo_url.*.max'    => "Één van je foto's is groter dan 2048 bytes.",
        ];
    }

}
