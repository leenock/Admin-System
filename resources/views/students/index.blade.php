@extends('layouts.dashboardnav')
@section('content')
<div class="content">
<div class="col-md-12">
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
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
                          <th>passport</th>
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
                          <th>passport</th>
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
                      @foreach ($students as $student)
                        <tr>
                          <td>{{ $student->id }}</td>
                          <td>{{ $student->Admission_Number }}</td>
                          <td>
                          
                          <div class="picture-container">
                                <div class="picture">
                                <img src="{{\Storage::url($student->passport)}}" class="picture-src" id="wizardPicturePreview" title="" alt="">  
                                </div>       
                                </div>
                           </div>
                          </td>
                          <td>{{ $student->First_Name }} {{ $student->Last_Name }} {{ $student->SurName }}</td>
                          <td>{{ $student->Email_Address }}</td>
                          <td>{{ $student->Phone_Number }}</td>
                          
                          <td>{{ $student->Gender }}</td>
                          <td>{{ $student->Course }}</td>
                          <td>{{ $student->created_at }}</td>
                          <td class="text-right">
                          
                            <a button href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">person</i></a>
                            
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i></a>
                          
                           
                            @can('student-delete')
                          {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $student->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                          {!! Form::close() !!}
                          @endcan

                            @endforeach
                            </td>
                            </tr>
                            
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


</div>
@endsection