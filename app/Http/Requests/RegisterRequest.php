<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'avatar' => 'required|mimes:jpeg,jpg,png,gif|max:5000',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'name' => 'required|min:3',
            'phone_number' => 'required|numeric|min:6|unique:users,phone_number',
            'birth_date' => 'required|date',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }
}