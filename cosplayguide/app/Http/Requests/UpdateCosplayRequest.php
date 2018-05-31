<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCosplayRequest extends FormRequest
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
            'name'                    => 'required|min:2',
            'name_serie'              => 'required|min:2',
            'thumbnail_url'           => 'image|mimes:jpeg,png,jpg|max:2048',
            'difficulty'              => 'required',
            'independence_percentage' => 'required|integer|min:0|max:100',
            'months_spent'            => 'required|integer|min:1',
            'euros_spent'             => 'required|integer|min:0',
            'project_description'     => 'required|min:30',

        ];
    }


    public function messages()
    {
        return [
            'name.required'                 => 'Geef de naam van je cosplay personage.',
            'name_serie.required'           => "Geef de naam van de serie of film waaruit je cosplay personage komt.",
            'difficulty.required'           => 'Geef aan hoe moeilijk je cosplay was om te maken.',
            'independence_percentage.required'   => 'Geef aan hoeveel je zelf hebt gedaan aan je cosplay.',
            'months_spent.required'         => 'Geef aan hoe lang je aan je cosplay hebt gewerkt.',
            'euros_spent.required'          => 'Geef een schatting van hoeveel je cosplay je in totaal kostte.',
            'project_description.required'  => 'Geef een korte beschrijving van je cosplayproces, welke materialen je gebruikte,..',
            'name.min'                      => "De naam van je personage moet minstens 2 letters lang zijn.",
            'name_serie.min'                => "De naam van de serie of film waaruit je cosplay personage komt moet minstens 2 letters lang zijn.",
            'project_description.min'       => "Je cosplayproces beschrijving moet minstens 30 letters lang zijn.",
            'thumbnail_url.image'           => "Je upgeloade bestand moet een afbeelding zijn.",
            'independence_percentage.integer'   => "Je zelfstandigheidspercentage moet een cijfer zijn.",
            'months_spent.integer'          => "Je besteede maanden moet een cijfer zijn.",
            'euros_spent.integer'           => "Je besteed budget moet een cijfer zijn.",
            'independence_percentage.min'   => "Je zelfstandigheidspercentage kan niet onder 0% liggen.",
            'months_spent.min'              => "Je aantal gespendeerde maanden ligt op min 1.",
            'euros_spent.min'               => "Je gespendeerde budget kan niet onder 0 liggen.",
            'independence_percentage.max'   => "Je zelfstandigheidspercentage kan niet boven 100% liggen.",
            'thumbnail_url.max'             => "Je foto mag niet groter zijn dan 2048 bytes.",
            'thumbnail_url.mimes'           => "Je bestand is niet van het type .jpeg, .jpg, .png of .svg",

        ];
    }

}
