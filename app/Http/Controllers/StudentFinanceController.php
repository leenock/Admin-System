<?php

namespace App\Http\Controllers;
use App\Models\StudentFinance;
use App\Http\Requests\StudentPaymentsPostRequest;
use App\Http\Requests\StudentPaymentsUpdateRequest;
use App\Services\StudentPostPaymentsService;
use Illuminate\Http\Request;

class StudentFinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    function __construct()
    {
    $this->middleware('permission:student-finance-list|student-finance-create|student-finance-edit|student-finance-delete', ['only' => ['index','show']]);
    $this->middleware('permission:student-finance-create', ['only' => ['create','store']]);
    $this->middleware('permission:student-finance-edit', ['only' => ['edit','update']]);
    $this->middleware('permission:student-finance-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        //
        return view('student_finance.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student_finance.student_payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentPaymentsPostRequest $request, StudentPostPaymentsService $fee_payment)
    {
        
        $fee_payment->store($request);
        return redirect()->route('student_payments.index')->with('success','student fee has posted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
