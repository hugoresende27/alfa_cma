<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name'=>['required','string','min:5'],
            'contact_nr'=>['required','integer','min:9'],
            'email'=>['required','string','email']
                            
        ];
        // ,
        // [
        //     'name'=>'5 chars minimum',
        //     'contact_nr'=>'9 digits minimum',
        //     'email'=>'Invalid Email',
        // ];
    }
}
