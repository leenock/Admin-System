<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseFinance;
use App\Http\Requests\CoursefeePostRequest;
use App\Http\Requests\CoursefeeUpdateRequest;
use App\Services\CoursePostService;


class CourseFinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
    $this->middleware('permission:course-finance-list|course-finance-create|course-finance-edit|course-finance-delete', ['only' => ['index','show']]);
    $this->middleware('permission:course-finance-create', ['only' => ['create','store']]);
    $this->middleware('permission:course-finance-edit', ['only' => ['edit','update']]);
    $this->middleware('permission:course-finance-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        $coursefee = CourseFinance::latest()->paginate(100);
        return view('finance.course_finance',compact('coursefee'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CoursePostService $coursefee)
    {
        //
        $coursefee = CourseFinance::latest()->paginate(100);
        return view('finance.course_finance_create',compact('coursefee'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursefeePostRequest $request, CoursePostService $coursefee)
    {
        
        $coursefee->store($request);
        return redirect()->route('course_finance.create')->with('success','Course feestructure posted successfully');
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
        $coursefee = CourseFinance::findOrFail($id);
        return view('finance.course_finance_edit',compact('coursefee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoursefeeUpdateRequest $request, $id,CoursePostService $coursefee)
    {
        
        $coursefee->update($request,$id);
        return redirect()->route('course_finance.index')->with('success','course fee details updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseFinance::find($id)->delete();
        return redirect()->route('course_finance.index')->with('success','Course Record has be deleted successfully');
    }
}
