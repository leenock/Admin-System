@extends('layouts.dashboardnav')

@section('content')

<div class="content">
        <div class="container-fluid">
        <div class="row">
                  @if (count($errors) > 0)
          <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
          </ul>
          </div>
          @endif
            <div class="col-md-4">
              <div style="height:400px" class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Course Fee Registration-</h4>
                </div>          
                <form action="{{ route('course_finance.store') }}" method="POST">
                @csrf
                  <div class="card-body ">
                     <div class="form-group bmd-form-group">
                        <div class="form-group">
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

                        <div class="form-group bmd-form-group">
                             <select class="form-control" name="Course_Period" id="sel1" required> 
                                 <option  selected disabled value="">Please select Period</option>
                                 <option>one month</option>
                                 <option>two month</option>
                                 <option>three month</option>
                                 <option>four month</option>
                              </select>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label for="examplePassword" class="bmd-label-floating"> Course Amount *</label>
                           <input type="text" class="form-control" required="true" maxlength=8 onkeyup="allnumbers(this)" name="courseamount" aria-required="true">
                         </div>
                     </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-rose">Register</button>
                        </div>           
                 </form>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-success">
                <div class="card-icon">
                    <i class="material-icons">book</i>
                  </div>
                  <h4 class="card-title">Course Fee structures-</h4>
                </div> 

                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Course Name</th>
                          <th>Course period</th>
                          <th>Fee structure</th>
                          <th>created at</th>
                          <th>updated at</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>id</th>
                          <th>Course Name</th>
                          <th>Course period</th>
                          <th>Fee structure</th>
                          <th>created at</th>
                          <th>updated at</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      @foreach ($coursefee as $coursefees)
                        <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $coursefees->course_name }}</td>
                          <td>{{ $coursefees->course_period }}</td>
                          <td>{{ $coursefees->fee_amount }}</td>
                          <td>{{ $coursefees->created_at }}</td>
                          <td>{{ $coursefees->updated_at }}</td>
                          
                          <td class="text-right">   
                            @can('course-finance-edit')                        
                            <a href="{{ route('course_finance.edit',$coursefees->id) }}" onclick="return myFunction();" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i></a>
                            @endcan
                            @can('course-finance-delete')
                          {!! Form::open(['method' => 'DELETE','route' => ['course_finance.destroy', $coursefees->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger delete-coursefee']) !!}
                          {!! Form::close() !!}
                          @endcan

                           
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>


                </div>
            </div>






            </div>
          </div>
 </div>
</div>


@endsection