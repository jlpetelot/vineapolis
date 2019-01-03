<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VigneronRequest extends FormRequest
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
        // dd($this->method());

        return [
            'societe'           => 'required',
            'adresse'           => 'required',
            'email'             => 'email',
            'latlong'           => 'required',
            'sortevin'          => 'required',
            'actif'             => 'required',
            'departement'       => 'required',
            'created_at'        => 'required',
        ];
    }
}
