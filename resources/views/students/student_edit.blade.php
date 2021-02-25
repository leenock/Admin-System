@extends('layouts.dashboardnav')
@section('content')
<div class="content">
    <div class="container-fluid">
    @if ($errors->any())
                <div style="width:100%" class="alert alert-warning">
                <strong>Whoops!</strong>There were some problems with the student details input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                     <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                     </div>
                      <h4 class="card-title">Update Student Details -</h4>
                  </div>

                  <div class="card-body">
                  <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data"  novalidate="novalidate"> 
                  @csrf    
                 @method('PUT')

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                        <h6 class="card-category text-gray">First Name</h6> 
                          <input type="text" name="First_Name" value=" {{ $student->First_Name }}" onkeyup="allLetter(this)"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <h6 class="card-category text-gray">Middle Name</h6> 
                          <input type="text" name="Last_Name" value="{{ $student->Last_Name }}" onkeyup="allLetter(this)" class="form-control" > 
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Sur Name</h6> 
                          <input type="text" name="SurName" value=" {{ $student->SurName }}" onkeyup="allLetter(this)" class="form-control" > 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Email Address</h6> 
                          <input type="text" name="Email_Address" value=" {{ $student->Email_Address }}" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">National Id</h6> 
                          <input type="text" name="IDnumber" value="{{ $student->IDnumber }}" maxlength=8 onkeyup="allnumbers(this)" class="form-control" > 
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Phone Number</h6> 
                          <input type="text" name="Phone_Number" value=" {{ $student->Phone_Number }}" maxlength=10 onkeyup="allnumbers(this)" class="form-control" > 
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-group"> 
                        <h6 class="card-category text-gray">Date Of Birth</h6> 
                          <input type="text"  name="DOB" value=" {{ $student->DOB }}" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Gender</h6> 
                          <select  class="form-control" name="Gender"  value="{{ $student->Gender }}"  id="sel1" required>
                          <option>Please select gender</option>
                           <option>Male</option>
                           <option>Female</option>
                         </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Marital Status</h6> 
                          <input type="text" name="Marital_Status" value=" {{ $student->Marital_Status }}" onkeyup="allLetter(this)" class="form-control" > 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Religion</h6> 
                          <input type="text" name="Religion"  value=" {{ $student->Religion }}" onkeyup="allLetter(this)" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Alternate Mobile</h6> 
                          <input type="text" name="Alternate_Mobile" value="{{ $student->Alternate_Mobile }}" maxlength="10" onkeyup="allnumbers(this)" class="form-control" > 
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Contact Address</h6> 
                          <input type="text" name="Contact_Address"  value=" {{ $student->Contact_Address }}"  class="form-control" > 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">City</h6> 
                          <input type="text" name="City" value=" {{ $student->City }}" onkeyup="allLetter(this)" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">County</h6> 
                          <input type="text" name="Country" value="{{ $student->Country }}" onkeyup="allLetter(this)" class="form-control" > 
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Postal Code</h6> 
                          <input type="text" name="Postal_Code" value=" {{ $student->Postal_Code }}" class="form-control" > 
                        </div>
                      </div>
                    </div>
                </div>

                 </div>
            </div>

            <div class="col-md-4">
              <div class="card card-profile">
                <div class="picture-container">
                                <div class="picture">
                                 <img src="{{\Storage::url($student->passport)}}" class="picture-src" id="wizardPicturePreview" title="">
                                  <input type="file" name="passport" id="wizard-picture" class="" required>
                                </div>
                                    <h6 class="">Update passport</h6>
                                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Created At / {{ $student->created_at }}</h6>
                  <h6 class="card-category text-gray">Student Name</h6> 

                  <h6 class="card-category text-black"> {{ $student->First_Name }} {{ $student->Last_Name }} {{ $student->SurName }}</h6>
                  
                  <h6 class="card-category text-gray">  Registration NUmber</h6> <h6 class="card-category text-black"> {{ $student->Admission_Number }}</h6>
                
                 
                </div>
              </div>
             
            </div>

            <div class="container-fluid">
             <div class="row">

               <div class="col-md-12">
                 <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                      <h4 class="card-title">Next of Kin Details -</h4>
                  </div>
                  <div class="card-body">
                       
                   <div class="row">
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Full Names</h6> 
                          <input type="text" name="Next_of_KIn_fullnames" value=" {{ $student->Next_of_KIn_fullnames }}" onkeyup="allLetter(this)" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Relationship</h6> 
                          <input type="text" name="Relationship" value="{{ $student->Relationship }}" onkeyup="allLetter(this)" class="form-control" > 
                        </div>
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Mobile Number</h6> 
                          <input type="text" name="Mobile" value=" {{ $student->Mobile }}" maxlength="10" onkeyup="allnumbers(this)" class="form-control" > 
                        </div>
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Alternate Mobile Number</h6> 
                          <input type="text" name="Alternative_Mobile_NextKIn" value=" {{ $student->Alternative_Mobile_NextKIn }}" maxlength="10" onkeyup="allnumbers(this)" class="form-control" > 
                        </div>
                      </div>
                    </div>
                   
                  </div>

                 </div>
            </div>

         </div>
        </div>
        <div class="container-fluid">
             <div class="row">

               <div class="col-md-12">
                 <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                      <h4 class="card-title">Course Details -</h4>
                  </div>
                  <div class="card-body">
                    
                   <div class="row">
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Course Names</h6> 
                          <select class="form-control" name="Course" value=" {{ $student->Course }}"  id="sel1" required>
                          <option value="">Please select Course</option>
                                <option>SMS-Based Development</option>
                                <option>Android Programming</option>
                                <option>Arduino Coding</option>
                                <option>Desktop Applications</option>
                                <option>Bar-code systems</option>
                                <option>Web Development</option>
                                <option></option>
                              </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Course Period</h6> 
                          <select class="form-control" value="{{ $student->Course_Period }}" name="Course_Period" id="sel1" required> 
                          <option value="">Please select Period</option>
                                 <option>one month</option>
                                 <option>two month</option>
                                 <option>three month</option>
                                 <option>four month</option>
                              </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Enrollement Period</h6> 
                          <select class="form-control" name="Enrollement_Period" id="sel1" required> 
                          <option value="">Please select Enrollement Period</option>
                                <option>January-March</option>
                                <option>April -August</option>
                               <option>September-  December</option>
                           </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <h6 class="card-category text-gray">Update Time</h6> 
                          <input type="text" value=" {{ $student->updated_at }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>
                    <input type="submit" name="" class="btn btn-sm btn-rose pull-left" value="Update Application">
                   </form>
                   
                  </div>

                 </div>
            </div>


         </div>
        </div>
        </div>
    </div>
</div>
@endsection