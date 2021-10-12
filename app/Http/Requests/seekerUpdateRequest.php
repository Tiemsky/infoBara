<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class seekerUpdateRequest extends FormRequest
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
            'firstname'=> 'required|string|min:1',
            'lastname'=>'required|string',
            'phone'=>'required',
            'Country'=>'required',
            'State'=>'required',
            'City'=>'required',
            'address'=>'required',
            'preferred-job'=>'required',
            'salary-range-from'=>'required',
            'salary-range-to'=>'required',
            'about-me'=>'required',
            'date_of_birth'=>'required',
        ];
    }
}
