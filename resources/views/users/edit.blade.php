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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Edit User Profile -
                    
                  </h4>
                </div>          
                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
           <div class="card-body ">
                  <div class="form-group bmd-form-group">
                      <input type="text" class="form-control" id="text" name="name" value="{{ $user->name }}" required="true" aria-required="true">
                    </div>

                    <div class="form-group bmd-form-group">
                      <input type="email" class="form-control" id="exampleEmail" name="email" value="{{ $user->email }}" required="true" aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="examplePassword" class="bmd-label-floating"> Password *</label>
                      <input type="password" class="form-control" id="examplePassword" required="true" name="password" aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="examplePassword1" class="bmd-label-floating"> Confirm Password *</label>
                      <input type="password" class="form-control" id="examplePassword1" required="true" equalto="#examplePassword" name="confirm-password" aria-required="true">
                    </div>
                 <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                </div>
                  </div>
                  <div class="card-footer text-right">
                    <div class="form-check mr-auto">
                      <label class="form-check-label">                     
                      </label>
                    </div>
                    <button type="submit" class="btn btn-sm btn-rose">Submit</button>
                  </div>           
                  {!! Form::close() !!}               
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../../assets/img/faces/marc.jpg">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Administrator</h6>
                  <h4 class="card-title">{{ Auth::user()->name }}</h4>
                  <p class="card-description">
                    Administrator has all the privileges and can create new roles and assign them to the new system users....
                  </p>
                </div>
              </div>
              <a button type="submit" href="{{ route('users.index') }}" class="btn btn-sm btn-rose pull-right">List of users<div class="ripple-container"></div></a>

            </div>
          </div>
 </div>
</div>


@endsection