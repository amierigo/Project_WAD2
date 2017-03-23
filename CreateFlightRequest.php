<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFlightRequest extends FormRequest
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
            'origin' => 'reqiured',
            'destination'=> 'reqiured',
            'departure' => 'reqiured|date',
            'returning' => 'reqiured|date',
            'type' => 'reqiured'    
        ];
    }
}
