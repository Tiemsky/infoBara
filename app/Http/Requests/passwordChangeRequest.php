<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class passwordChangeRequest extends FormRequest
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
            'current-password'=>'required|min:8',
            'new-password'=>'required|min:8',
            'confirm-new-password'=>'required|min:8|same:new-password'
        ];
    }
}
