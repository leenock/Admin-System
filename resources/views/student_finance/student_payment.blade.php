@extends('layouts.dashboardnav')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                  <div class="card-header card-header-icon card-header-success">
                     <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                     </div>
                      <h4 class="card-title">Student payments submition -</h4>
                  </div>

                  <div class="card-body">
                  <form action="{{ route('student_payments.store') }}" method="POST">   
                  @csrf  
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">First Name</h6> 
                          <input type="text" name="First_Name" onkeyup="allLetter(this)"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Middle Name</h6> 
                          <input type="text" name="Last_Name" onkeyup="allLetter(this)"  class="form-control" required> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Sur Name</h6> 
                          <input type="text" name="SurName" onkeyup="allLetter(this)"  class="form-control" required> 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Email Address</h6> 
                          <input type="email" name="Email_Address"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">National Id</h6> 
                          <input type="text" name="IDnumber" maxlength=8 onkeyup="allnumbers(this)"  class="form-control" required> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Phone Number</h6> 
                          <input type="text" name="Phone_Number"  maxlength=10 onkeyup="allnumbers(this)" class="form-control" required> 
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Registration Number</h6> 
                          <input type="text" name="RegNumber"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <select class="form-control" name="Course"  id="sel1" required>
                              <option value="">Please select Course</option>
                                <option>SMS-Based Development</option>
                                <option>Android Programming</option>
                                <option>Arduino Coding</option>
                                <option>Desktop Applications</option>
                                <option>Bar-code systems</option>
                                <option>Web Development</option>
                              
                              </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <select class="form-control" name="Course_Period" id="sel1" required> 
                                 <option  selected disabled value="">Please select Period</option>
                                 <option>one month</option>
                                 <option>two month</option>
                                 <option>three month</option>
                                 <option>four month</option>
                              </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <select class="form-control" name="Enrollement_Period" id="sel1" required> 
                                <option>Enrollement Period</option>
                                <option>January-March</option>
                                <option>April -August</option>
                               <option>September-  December</option>
                           </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Course Amount</h6> 
                          <input type="text" name="courseamount"  class="form-control" required> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <h6 class="card-category text-gray">Amount paid</h6> 
                          <input type="text" name="amountpaid"  class="form-control" required> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <select class="form-control" name="status" required> 
                                <option value="">please select fee status</option>
                                <option>cleared</option>
                                <option>Uncleared</option>
                               
                           </select>
                        </div>
                      </div>
                    </div>

                  
                    <input type="submit" name="" class="btn btn-sm btn-rose pull-right" value="submit Payments">
                  </form>
                </div>


          </div>
         </div>
        </div>
      </div>
</div>


@endsection