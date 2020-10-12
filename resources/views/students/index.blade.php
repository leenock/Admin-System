@extends('layouts.dashboardnav')
@section('content')
<div class="content">
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Students List</h4>
                </div>
                <div class="card-body">
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                        <th>Id</th>
                          <th>Reg.No</th>
                         
                          <th>fullnames</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          
                          <th>Gender</th>
                          <th>Course</th>
                          <th>Created</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Id</th>
                          <th>Reg.No</th>
                         
                          <th>name</th>
                          <th>Email</th>
                          <th>Phonenumber</th>
                         
                          <th>Gender</th>
                          <th>Course</th>
                          <th>Created</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                    
                        <tr>
                          <td>1</td>
                          <td>0098746</td>
                          
                          <td>Enoch Mwenda Mugo</td>
                          <td>Email Address</td>
                          <td>0798786353</td>
                          
                          <td>male</td>
                          <td>desktop application</td>
                          <td>Created</td>
                          <td class="text-right">
                          
                            <a button href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">person</i></a>
                            
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i></a>
                          
                            <a href="#" class="btn btn-link btn-warning btn-just-icon delete"><i class="material-icons">delete</i></a>
                            
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


</div>
@endsection