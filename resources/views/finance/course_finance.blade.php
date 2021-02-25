@extends('layouts.dashboardnav')

@section('content')

<div class="content">
        <div class="container-fluid">
        <div class="row">
      
            <div class="col-md-10">
            @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
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