<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [

        'Admission_Number',
        'Passport',
        'First_Name',
        'Last_Name',
        'SurName',
        'Email_Address',
        'IDnumber',
        'Phone_Number',
        'DOB',
        'Gender',
        'Marital_Status',
        'Religion',
        'Alternate_Mobile',
        'Contact_Address',
        'City',
        'Country',
        'Postal_Code',
        'Next_of_KIn_fullnames',
        'Relationship',
        'Mobile',
        'Alternative_Mobile_NextKIn',
        'Course',
        'Course_Period',
        'Enrollement_Period',


    ];
}
