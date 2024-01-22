<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required | min: 5 ',
            'description' => 'required | min: 10',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required | min: 2'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Devi inserire il titolo del fumetto!',
            'title.min' => 'Il titolo del fumetto deve avere almeno 5 caratteri!',
            'description.required' => 'Inserisci la descrizione!',
            'description.min' => 'La descrizione del fumetto deve avere almeno 10 caratteri!',
            'thumb.required' => 'Inserisci l\'immagine del fumetto!',
            'price.required' => 'Inserisci il prezzo del fumetto!',
            'series.required' => 'Inserisci la serie del fumetto!',
            'sale_date.required' => 'Inserisci la data di uscita del fumetto!',
            'type.required' => "Seleziona la tipologia del fumetto!",
            'type.min' => "Seleziona la tipologia del fumetto"
        ];
    }
}
