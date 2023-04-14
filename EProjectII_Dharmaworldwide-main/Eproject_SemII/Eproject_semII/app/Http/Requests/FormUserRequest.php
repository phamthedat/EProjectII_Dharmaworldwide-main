<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUserRequest extends FormRequest
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
            'fullName' => ['required', 'min:5'],
            'phone' => ['numeric', 'required', 'min:9'],
            'email' => ['required', 'min:5'],
            'address' => ['required',],
            'username' =>  ['required', 'min:5'],
            'password' =>  ['required', 'min:5'],
        ];
    }

    public function messages()
    {
        return [
            'fullName.required' => 'Please enter your name',
            'phone.required' => 'Please enter your phone',
            'email.required' => 'Please enter email',
            'address.required' => 'Please enter address',
            'username.required' => 'Please enter username',
            'password.required' => 'Please enter password',
            'email.min' => 'Email at least 5 characters',
            'username.min' => 'Username at least 5 characters',
            'password.min' => 'password is too weak',
            'fullName.min' => 'Last name at least 5 characters',
            'phone.numeric' => 'Phone number must be',
            'phone.min' => 'phone number at least 9 digits',


        ];
    }
}
