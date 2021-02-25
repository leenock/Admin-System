<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursefeeUpdateRequest extends FormRequest
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
            
            'Course' => 'required|string',
            'Course_Period' => 'required|string',
            'courseamount' => 'required|string|max:100',
        ];
    }
    public function messages()
    {
        return [
            'Course.required' => 'Course  name  is required',
            'Course_Period.required' => 'Course period details is required',
            'courseamount.required' => 'Course  amout details  is required',
         ];
    }
}
