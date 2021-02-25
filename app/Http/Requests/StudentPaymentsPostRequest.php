<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentPaymentsPostRequest extends FormRequest
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
            //

            'RegNumber'=>'required|string|max:20|unique:student_finances,Admission_Number',
            'First_Name'=> 'required|string|max:50',
            'Last_Name'=> 'required|string|max:50',
            'SurName'=> 'required|string|max:10',
            'Email_Address'=> 'required|string|max:100',
            'IDnumber'=>'required|string|max:20|unique:student_finances',
            'Phone_Number'=>'required|string|max:20|unique:student_finances',
            'Course' => 'required|string',
            'Course_Period' => 'required|string',
            'Enrollement_Period'=>'required|string|max:20',
            'courseamount' => 'required|string|max:100',
            'amountpaid' => 'required|string|max:100',
            'status'=>'required|string|max:20',


        ];
    }

    public function messages()
    {
        return [

            'RegNumber.unique' => 'RegNumber is already taken',
            'RegNumber.required' => 'RegNumber name is required',

            'Email_Address.required' => 'Invalid Email Address:rfc,dns',
            'Email_Address.unique' => 'Email Address is already taken',
            'Phone_Number.required' =>   'Invalid Phone Number',
            'First_Name.required' => 'First Name is required',
            'Last_Name.required' => 'Last Name is required',
            'SurName.required' => 'Surname is missing',
            'IDnumber.required'=> 'Id number is required for capture',
            'IDnumber.unique' => 'Course Amount is required',

            'Course.required'=> 'please fill in the course',
            'Course_Period.required'=> 'please fill in the course period',


            'Enrollement_Period.required' => 'Enrollement period is required',
            'courseamount.required' => 'Course Amount is required',
            'amountpaid.required' => 'Course Amount paid details is required',
            'status.required' => 'Fee status details is required',
         ];
    }
}
