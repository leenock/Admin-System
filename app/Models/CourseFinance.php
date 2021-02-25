<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseFinance extends Model
{
    

    protected $fillable = [

        'course_name', 'course_period', 'fee_amount'

    ];

}
