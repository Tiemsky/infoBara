<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class jobValidationRequest extends FormRequest
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
            'job-title'=>'required|min:3',
            'job-type'=>'required',
            'job-category'=>'required',
            'position'=>'required|min:3',
            'MinSalary'=>'required',
            'MaxSalary'=>'required',
            'Gender'=>'required',
            'Qualification'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'deadline'=>'required',
            'MinExperience'=>'required',
            'MaxExperience'=>'required',
            'role'=>'required|min:3',
            'job_description'=>'required'
        ];
    }
}
