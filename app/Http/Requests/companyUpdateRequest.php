<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class companyUpdateRequest extends FormRequest
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
            'company-name'=>'required|min:2',
            'contact'=>'required',
            'email'=>'required|email',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'address'=>'required',
            'description'=>'required'
        ];
    }
}
