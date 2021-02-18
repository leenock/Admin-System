@extends('layouts.dashboardnav')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                     <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                     </div>
                      <h4 class="card-title">Student Details -</h4>
                  </div>

                  <div class="card-body">
                  <form>     
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">First Name</h6> 
                          <input type="text" value=" {{ $student->First_Name }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Middle Name</h6> 
                          <input type="text" value="{{ $student->Last_Name }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Sur Name</h6> 
                          <input type="text" value=" {{ $student->SurName }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Email Address</h6> 
                          <input type="text" value=" {{ $student->Email_Address }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">National Id</h6> 
                          <input type="text" value="{{ $student->IDnumber }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Phone Number</h6> 
                          <input type="text" value=" {{ $student->Phone_Number }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Date Of Birth</h6> 
                          <input type="text" value=" {{ $student->DOB }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Gender</h6> 
                          <input type="text" value="{{ $student->Gender }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Marital Status</h6> 
                          <input type="text" value=" {{ $student->Marital_Status }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Religion</h6> 
                          <input type="text" value=" {{ $student->Religion }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Alternate Mobile</h6> 
                          <input type="text" value="{{ $student->Alternate_Mobile }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Contact Address</h6> 
                          <input type="text" value=" {{ $student->Contact_Address }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">City</h6> 
                          <input type="text" value=" {{ $student->City }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Country</h6> 
                          <input type="text" value="{{ $student->Country }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Postal Code</h6> 
                          <input type="text" value=" {{ $student->Postal_Code }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>
                          
                    <div class="clearfix"></div>
                  </form>
                </div>

                 </div>
            </div>


            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{\Storage::url($student->passport)}}">
                  </a>
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
                   <form>     
                   <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Full Names</h6> 
                          <input type="text" value=" {{ $student->Next_of_KIn_fullnames }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Relationship</h6> 
                          <input type="text" value="{{ $student->Relationship }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Mobile Number</h6> 
                          <input type="text" value=" {{ $student->Mobile }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Alternate Mobile Number</h6> 
                          <input type="text" value=" {{ $student->Alternative_Mobile_NextKIn }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                   </form>
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
                   <form>     
                   <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Course Names</h6> 
                          <input type="text" value=" {{ $student->Course }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Course Period</h6> 
                          <input type="text" value="{{ $student->Course_Period }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Enrollement Period</h6> 
                          <input type="text" value=" {{ $student->Enrollement_Period }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Update Time</h6> 
                          <input type="text" value=" {{ $student->updated_at }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                   </form>
                   <div style="padding:center" class="form-group bmd-form-group">
                  <a class="btn btn-sm  btn-danger pull-right" href="{{ route('students.index') }}"> Students list</a>
                        </div>
                  </div>

                 </div>
            </div>


         </div>
        </div>




        </div>
    </div>
</div>


@endsection