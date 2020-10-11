@extends('layouts.dashboardnav')

@section('content')
<div class="content">
<div class="col-md-10 mr-auto ml-auto">
          <!--      Wizard container        -->
          <div class="wizard-container">
            <div class="card card-wizard active" data-color="primary" id="wizardProfile">
              <form action="" method="" novalidate="novalidate">
                <div class="card-header text-center">
                  <h3 class="card-title">Student Registration Profile</h3>
                  <h5 class="description">This information will let us know more about you.</h5>
                  <br>
                <div class="card-header card-header-tabs card-header-rose">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                     
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#profile" data-toggle="tab">
                            <i class="material-icons">person</i> PERSONAL DATA
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                          <i class="material-icons">person</i> Account
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> Address
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#course" data-toggle="tab">
                            <i class="material-icons">book</i> Programme
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active show" id="profile">
                    <h5 class="info-text"> Let's start with the basic information</h5>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                        <div class="form-group bmd-form-group">
                        <lable>Admission Number</lable>
                          <input type="text"  class="form-control" disabled>
                        </div>
                        <div class="picture-container">
                            <div class="picture">
                                <img src="assets/img/faces/kendall.jpg" class="picture-src" id="wizardPicturePreview" title="">
                                <input type="file" id="wizard-picture" class="">
                            </div>
                            <h6 class="">Choose passport</h6>
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="First Name" class="form-control"  >
                        </div>
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="Last Name" class="form-control" >
                        </div>
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="Sur name" class="form-control" > 
                        </div>
                        </div>
                        
                      <div class="col-lg-10 mt-2">
                      <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <input type="email" placeholder="Email Address" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="ID/Passport No" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <input type="text" placeholder="Phone Number" class="form-control" >
                        </div>
                      </div>
                    </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="messages">
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-5">
                      <div class="form-group bmd-form-group is-filled">
                    <input type="text" placeholder="Date of Birth" class="form-control datepicker">
                  </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                     
                      <select class="form-control" id="sel1">
                      <option>Please select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <input type="email" placeholder=" Marital Status " class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                         <input type="text" placeholder="Religion " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="Alternative phone number" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="Contact Address…" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                </div>

                    </div>
                    <div class="tab-pane" id="settings">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                         <input type="text" placeholder="Next of Kin Full Name: " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="Relationship" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                         <input type="text" placeholder="Mobile /Cell " class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input type="text" placeholder="Alternative Mobile Number " class="form-control">
                        </div>
                      </div>
                    </div>
                   
                    </div>
                    <div class="tab-pane" id="course">

                    <input type="button" class="btn btn-sm btn-rose pull-left" value="submit">
                    </div>

                  </div>  
           
              </div>
              </form>
            </div>
            <div class="row">
            <div class="col-md-12">
            <div class="card-footer">
                  <div class="pull-right">
                    <input type="button" class="btn btn-sm btn-next btn-fill btn-rose btn-wd valid" name="next" value="Next" aria-invalid="false" style="">
                  </div>
                  
                  <div class="pull-left">
                  <div class="col-md-12">
                    <input type="button" class="btn btn-sm btn-previous pull-left" name="previous" value="Previous">
                  </div>
                  <div class="clearfix"></div>
                </div>
                
                </div>
                </div>
          </div> <!-- wizard container -->
          </div>
        </div>
        
        </div>

@endsection