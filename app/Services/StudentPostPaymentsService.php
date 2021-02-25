<?php

namespace App\Services;

use App\Http\Requests\StudentPaymentsPostRequest;
use App\Http\Requests\StudentPaymentsUpdateRequest;
use App\Models\StudentFinance;
use Illuminate\Support\Facades\Auth;

class StudentPostPaymentsService
{


    public function fetchAll()
    {
        // first by priority..then when it was created
        return StudentFinance::orderBy('id', 'ASC')->orderBy('updated_at', 'DESC')->get();
    }
    public function fetch($id)
    {
        return StudentFinance::findOrFail($id);
    }

    public function store(StudentPaymentsPostRequest $request)
    {

        $fee_payment = new StudentFinance;

        $fee_payment->Admission_Number = $request->get('RegNumber');
        $fee_payment->First_Name = $request->get('First_Name');
        $fee_payment->Last_Name = $request->get('Last_Name');
        $fee_payment->SurName = $request->get('SurName');
        $fee_payment->Email_Address = $request->get('Email_Address');
        $fee_payment->IDnumber = $request->get('IDnumber');
        $fee_payment->Phone_Number = $request->get('Phone_Number');
        $fee_payment->course_name = $request->get('Course');
        $fee_payment->course_period = $request->get('Course_Period');
        $fee_payment->Enrollement_Period = $request->get('Enrollement_Period');
        $fee_payment->Course_Amount = $request->get('courseamount');
        $fee_payment->Amount_Paid = $request->get('amountpaid');
        
        $fee_payment->Fee_Status = $request->get('status');

        $fee_payment->save();

    }

}
?>