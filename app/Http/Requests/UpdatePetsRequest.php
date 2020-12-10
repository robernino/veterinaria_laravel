<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePetsRequest extends FormRequest
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
            'owner_id' => 'required|unique:pets,owner_id',
            'vet_id' => 'required',
            'species_id' => 'required',
            'name' => 'required|min:5|max:128',
            'age' => 'required|min:5|max:128',
            'weight' => 'required|min:5|max:128',
            'gender' => 'required',    
        ];
    }
}