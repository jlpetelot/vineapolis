<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VigneronVigneronupdateRequest extends FormRequest
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
            'societe'           => 'required',
            'adresse'           => 'required',
            'latlong'           => 'required',
            'sortevin'          => 'required',
            'imagereportage'    => 'mimes:jpg,jpeg',
            'email'             => 'required|email',
//            'qualitevin'        => 'required',
//            'departement'       => 'required',
//            'zoom'              => 'required',
//            'latlongregion'     => 'required',
//            'updated_at'        => 'required'
        ];
    }
}
