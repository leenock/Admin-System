@extends('layouts.dashboardnav')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-11">
            @if ($message = Session::get('success'))
                  <div style="align:center" class="alert alert-rose col-md-11 col-md-offset-4">
                  <p>{{ $message }}</p>
                  </div>
                  @endif
              <div style="width:97%" class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">supervised_user_circle</i>
                  </div>
              
                  <h4 class="card-title">Role Management</h4>
                </div>
                <div  class="card-body">
                @can('role-create')
                <a button type="submit" href="{{ route('roles.create') }}" class="btn btn-sm btn-rose pull-right">Add Role<div class="ripple-container"></div></a>
                @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>Name</th>
                          <th>created at</th>
                          <th>Updated at</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($roles as $key => $role)
                        <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>  
                        <td>{{ $role->created_at }}</td> 
                        <td>{{ $role->updated_at }}</td>     
                          <td class="td-actions text-right">
                            <a button href="{{ route('roles.show',$role->id) }}" type="button" rel="tooltip" class="btn btn-info">
                              <i class="material-icons">person</i>
                            </a>
                            @can('role-edit')
                            <a href="{{ route('roles.edit',$role->id) }}" type="button" rel="tooltip" class="btn btn-success">
                              <i class="material-icons">edit</i>
                            </a>
                            @endcan
                            @can('role-delete')
{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endcan
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {!! $roles->render() !!}
                  </div>
                </div>
              </div>
             </div>
            </div>
           </div>
        </div>

@endsection




