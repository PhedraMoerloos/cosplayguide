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


    public function messages()
    {
        return [
            'name.required'       => "Geef de naam van je cosplay personage.",
            'name_serie.required' => "Geef de naam van de serie of film waaruit je cosplay personage komt.",
            'name.min'            => "De naam van je personage moet minstens 2 letters lang zijn.",
            'name_serie.min'      => "De naam van de serie of film waaruit je cosplay personage komt moet minstens 2 letters lang zijn.",
            'photo_url.required'  => "Upload 1 foto van je personage om je op te baseren.",
            'photo_url.image'     => "Je upgeloade bestand moet een afbeelding zijn.",
            'photo_url.max'       => "Je foto mag niet groter zijn dan 2048 bytes.",
            'photo_url.mimes'     => "Je bestand is niet van het type .jpeg, .jpg, .png of .svg",
        ];
    }

}
