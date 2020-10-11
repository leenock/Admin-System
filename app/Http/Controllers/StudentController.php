<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

    public function index(){

        return view('students.index');

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

public function store(Request $request)
{

  
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


public function update(Request $request, Student $student)
{



}
/**
* Remove the specified resource from storage.
*
* @param  \App\Dummy  $dummy
* @return \Illuminate\Http\Response
*/
public function destroy(Student $student)
{

}

}
