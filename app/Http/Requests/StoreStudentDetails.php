<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentDetails extends FormRequest
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
            
          
           'passport' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'First_Name'=> 'required|string|max:50',
           'Last_Name'=> 'required|string|max:50',
           'SurName'=> 'required|string|max:10',
           'Email_Address'=> 'required|string|max:100|unique:students',
           'IDnumber'=>'required|string|max:20|unique:students',
           'Phone_Number'=>'required|string|max:20|unique:students',
           'DOB'=>'required|string|max:100',
           'Gender'=>'required|string|max:10',
           'Marital_Status'=>'required|string|max:20',
           'Religion'=>'required|string|max:20',
           'Alternate_Mobile'=>'required|string|max:20',
           'Contact_Address'=>'required|string|max:20',
           'City'=>'required|string|max:20',
           'Country'=>'required|string|max:20',
           'Postal_Code'=>'required|string|max:200',
           'Next_of_KIn_fullnames'=>'required|string|max:100',
           'Relationship'=>'required|string|max:100',
           'Mobile'=>'required|string|max:20',
           'Alternative_Mobile_NextKIn'=>'required|string|max:100',
           'Course'=>'required|string|max:100',
           'Course_Period'=>'required|string|max:20',
           'Enrollement_Period'=>'required|string|max:20',
        
           
        ];
    }

/**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */

    public function messages()
{
    return [
        'passport.required' => 'Student passport  is required',
        'Email_Address.required' => 'Invalid Email Address:rfc,dns',
        'Email_Address.unique' => 'Email Address is already taken',
        'Phone_Number.required' =>   'Invalid Phone Number',
        'First_Name.required' => 'First Name is required',
        'Last_Name.required' => 'Last Name is required',
        'SurName.required' => 'Surname is missing',
        'IDnumber.required'=> 'Id number is required for capture',
        'DOB.required'=>'Date of birth is missing',
        'Gender.required'=> 'Gender is required',
        'Marital_Status.required'=> 'Please fill in Marital Status',
        'Religion.required'=> 'Please fill in Student religion',
        'Alternate_Mobile.required'=> 'Alternate mobile number is missing',
        'Contact_Address.required'=> 'Contact Address is missing',
        'City.required'=> 'please fill in current citys',
        'Country.required'=> 'please fill in origin country',
        'Postal_Code.required'=> 'Postal code address is missing',
        'Next_of_KIn_fullnames.required'=> 'fill in Next of kin fullname details',
        'Relationship.required'=> 'Relationship with the next of kin is missing',
        'Mobile.required'=> 'Next of kin mobile number is missing',
        'Alternative_Mobile_NextKIn.required'=> 'Next of kin alternate phone number is missing',
        'Course.required'=> 'please fill in the course',
        'Course_Period.required'=> 'please fill in the course period',
        'Enrollement_Period.required'=> 'please fill in the Enrollement Period',

     ];
}


/**
 * Get custom attributes for validator errors.
 *
 * @return array
 */

public function attributes()
{
    return [
        'email' => 'email address',
    ];
}
}
