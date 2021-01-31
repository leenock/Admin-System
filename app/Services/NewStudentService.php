<?php


namespace App\Services;

use App\Http\Requests\StoreStudentDetails;
use App\Http\Requests\StudentDetailsUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;

class NewStudentService extends Service
{


    public function fetchAll()
    {
        // first by priority..then when it was created
        return Student::orderBy('id', 'ASC')->orderBy('updated_at', 'DESC')->get();
    }

    public function fetch($id)
    {
        return Student::findOrFail($id);
    }

    public function store(StoreStudentDetails $request)
    {
        

    $filename = $this->saveStudentFile($request->file('passport'));

    $student_ID = Helper::IDGenerator(new Student, 'Admission_Number', 5, 'INFI');

    $student = new Student;

     $student->Admission_Number	= $student_ID;
     

    
     $student->passport = $filename;
     //$student->passport = $request->file('passport')->store('public/StudentProfileImages');
     $student->First_Name = $request->get('First_Name');
     $student->Last_Name = $request->get('Last_Name');
     $student->SurName = $request->get('SurName');
     $student->Email_Address = $request->get('Email_Address');
     $student->IDnumber = $request->get('IDnumber');
     $student->Phone_Number = $request->get('Phone_Number');


     $student->DOB = $request->get('DOB');
     $student->Gender = $request->get('Gender');
     $student->Marital_Status = $request->get('Marital_Status');
     $student->Religion = $request->get('Religion');
     $student->Alternate_Mobile = $request->get('Alternate_Mobile');
     $student->Contact_Address = $request->get('Contact_Address');
     $student->City = $request->get('City');
     $student->Country = $request->get('Country');
     $student->Postal_Code = $request->get('Postal_Code');


     $student->Next_of_KIn_fullnames = $request->get('Next_of_KIn_fullnames');
     $student->Relationship = $request->get('Relationship');
     $student->Mobile = $request->get('Mobile');
     $student->Alternative_Mobile_NextKIn = $request->get('Alternative_Mobile_NextKIn');

     $student->Course = $request->get('Course');
     $student->Course_Period = $request->get('Course_Period');
     $student->Enrollement_Period = $request->get('Enrollement_Period');
    



     $email_exist = Student::where('Email_Address', '=', $request->input('Email_Address'))->first();
        if (!$email_exist === null) {
          
          $student->save();
        } else {
        
            abort(405, 'Trying to assign an already assigned asset');
           //return redirect('/students/create')->with('error', 'Assigned Email Address  already exists.');


        }

     }
}

?>