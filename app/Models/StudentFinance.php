<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFinance extends Model
{
    protected $fillable = [
        
    'Admission_Number',
    'First_Name',
    'Last_Name',
    'SurName',
    'Email_Address',
    'IDnumber',
    'Phone_Number',
    'course_name',
    'course_period',
    'Enrollement_Period',
    'Course_Amount',
    'Amount_Paid',
    'Balance',
    'Fee_Status',

];
}
