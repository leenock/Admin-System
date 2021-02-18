<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentDetails;
use App\Http\Requests\StudentUpdateRequest;
use App\Services\NewStudentService;

use App\Helpers\Helper;

class StudentController extends Controller
{

    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
function __construct()
{

    $this->middleware('permission:student-list|student-create|student-edit|student-delete', ['only' => ['index','show']]);
    $this->middleware('permission:student-create', ['only' => ['create','store']]);
    $this->middleware('permission:student-edit', ['only' => ['edit','update']]);
    $this->middleware('permission:student-delete', ['only' => ['destroy']]);


}
    public function index(NewStudentService $student){

        return view('students.index', ['students' => $student->fetchAll()]);
       // return view('students.index');

    }

    /**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/


public function create()
{

    return view('students.new_student');

}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/

public function store(StoreStudentDetails $request, NewStudentService $student)
{
  
    $student->store($request);
    return redirect()->route('students.index')->with('success','New student profile has created successfully'); 
}

/**
* Display the specified resource.
*
* @param  \App\Student  $student
* @return \Illuminate\Http\Response
*/

public function show(Student $student)
{
    return view('students.show_student',compact('student'));

}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Student  $student
* @return \Illuminate\Http\Response
*/

public function edit(Student $student)
{
    return view('students.student_edit',compact('student'));
}


public function update(StudentUpdateRequest $request, $id,NewStudentService $student)
{

    $student->update($request,$id);
    return redirect()->route('students.index')->with('success','student profile has updated successfully'); 

}
/**
* Remove the specified resource from storage.
*
* @param  \App\Dummy  $dummy
* @return \Illuminate\Http\Response
*/
public function destroy($id, NewStudentService $std)
{

    $std->delete($id);
    return redirect()->route('students.index')->with('success','Student Record has be deleted successfully');

}

}
