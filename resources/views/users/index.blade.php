@extends('layouts.dashboardnav')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
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
              
                  <h4 class="card-title">Users Management</h4>
                </div>
                <div  class="card-body">
                @can('user-create')
                <a button type="submit" href="{{ route('users.create') }}" class="btn btn-sm btn-rose pull-right">Add User<div class="ripple-container"></div></a>
                @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Roles</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($data as $key => $user)
                        <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                        </td>
                          
                          <td class="td-actions text-right">
                            <a button href="{{ route('users.show',$user->id) }}" type="button" rel="tooltip" class="btn btn-info">
                              <i class="material-icons">person</i>
                            </a>
                            @can('user-edit')
                            <a href="{{ route('users.edit',$user->id) }}" type="button" rel="tooltip" onclick="return myFunction();" class="btn btn-success">
                              <i class="material-icons">edit</i>
                            </a>
                            @endcan
                            @can('user-delete')
{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger delete-user']) !!}
{!! Form::close() !!}
@endcan
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
             </div>
            </div>
           </div>
        </div>


@endsection




