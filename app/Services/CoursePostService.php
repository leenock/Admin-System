<?php

namespace App\Services;

use App\Http\Requests\CoursefeePostRequest;
use App\Http\Requests\CoursefeeUpdateRequest;
use App\Models\CourseFinance;
use Illuminate\Support\Facades\Auth;

class CoursePostService
{

    public function fetchAll()
    {
        // first by priority..then when it was created
        return CourseFinance::orderBy('id', 'ASC')->orderBy('updated_at', 'DESC')->get();
    }
    public function fetch($id)
    {
        return CourseFinance::findOrFail($id);
    }

    public function store(CoursefeePostRequest $request)
    {

        $coursefee = new CourseFinance;
        $coursefee->course_name = $request->get('Course');
        $coursefee->course_period = $request->get('Course_Period');
        $coursefee->fee_amount = $request->get('courseamount');
        $coursefee->save();

    }

    public function update(CoursefeeUpdateRequest $request, $id)
    {

        $coursefee = CourseFinance::findOrFail($id);

        $coursefee->course_name = $request->get('Course');
        $coursefee->course_period = $request->get('Course_Period');
        $coursefee->fee_amount = $request->get('courseamount');
        $coursefee->save();

    }

    public function delete($id)
    {

       $std =  Student::findOrFail($id);
       $this->deleteStudentFile($std->passport);
       return Student::destroy($id);

    }









}
?>