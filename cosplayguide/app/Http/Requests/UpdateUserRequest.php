<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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

            'description' => 'min:4',
            'profile_picture_url' => 'image|mimes:jpeg,png,jpg|max:2048',

        ];
    }


    public function messages()
    {
        return [
            'description.min'               => "Je beschrijving moet minstens 4 letters lang zijn.",
            'profile_picture_url.image'     => "Je upgeloade bestand moet een afbeelding zijn.",
            'profile_picture_url.max'       => "Je foto mag niet groter zijn dan 2048 bytes.",
            'profile_picture_url.mimes'     => "Je bestand is niet van het type .jpeg, .jpg, .png of .svg",
        ];
    }
}
