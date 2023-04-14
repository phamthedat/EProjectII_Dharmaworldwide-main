<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'shipName' => ['required'],
            'shipAddress' => ['required'],
            'shipPhone' => ['required', 'numeric', 'min:9'],
            'email' =>  ['required'],
        ];
    }

    public function messages()
    {
        return [
            'shipName.required' => 'Please enter your name',
            'shipAddress.required' => 'Please enter address',
            'shipPhone.required' => 'Please enter the phone number',
            'email.required' => 'Please enter your email',
            'shipPhone.numeric' => 'phone must be number',
            'shipPhone.min' => 'phone number at least 9 digits',
        ];
    }
}
