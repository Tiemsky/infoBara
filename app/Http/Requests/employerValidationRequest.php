<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employerValidationRequest extends FormRequest
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
            'company'=>'required|string|string|min:1',
            'firstname'=> 'required|string|min:1',
            'lastname'=>'required|string',
            'email' => 'required|string|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
            'confirm-password' => 'required|string|min:8|same:password',
            'phone'=>'required|string|min:8|unique:users,phone',
            'gender'=>'required|in:male,female',
            'terms'=>'accepted'
        ];
    }
}
