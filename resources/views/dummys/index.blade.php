@extends('layouts.dashboardnav')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">supervised_user_circle</i>
                  </div>
                  <h4 class="card-title">System dummies</h4>
                  @can('dummy-create')
                  <a button type="submit" href="{{ route('dummys.create') }}" class="btn btn-sm btn-rose pull-right">Add dummy<div class="ripple-container"></div></a>
                  @endcan
                </div>
                
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Passport</th>
                          <th>name</th>
                          <th>details</th>
                          <th>created at</th>
                          <th>updated at</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Id</th>
                          <th>Passport</th>
                          <th>name</th>
                          <th>details</th>
                          <th>created at</th>
                          <th>updated at</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      @foreach ($dummies as $dummy)
                        <tr>
                          <td>{{ ++$i }}</td>
                          <td>
                          <div class="picture-container">
                                <div class="picture">
                                 <img src="assets/img/faces/kendall.jpg" class="picture-src" id="wizardPicturePreview" title="">   
                                </div>       
                                </div>
                           </div>
                          </td>
                          <td>{{ $dummy->name }}</td>
                          <td>{{ $dummy->detail }}</td>
                          <td>{{ $dummy->created_at }}</td>
                          <td>{{ $dummy->updated_at }}</td>
                          
                          <td class="text-right">
                          
                            <a button href="{{ route('dummys.show',$dummy->id) }}" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">person</i></a>
                            @can('dummy-edit')
                            <a href="{{ route('dummys.edit',$dummy->id) }}" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i></a>
                            @endcan
                           
                            @can('user-delete')
                          {!! Form::open(['method' => 'DELETE','route' => ['dummys.destroy', $dummy->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                          {!! Form::close() !!}
                          @endcan
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>


@endsection