@extends('layouts.dashboardnav')

@section('content')
<div class="content">
  <div class="container-fluid">
        <div class="row">
           <div class="col-md-12">
           <a button type="submit" href="{{ route('roles.index') }}" class="btn btn-sm btn-primary pull-right">back</a>

              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Edit Role -</h4>
                        </div> 
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
                        <div class="card-body">

                        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Permission:</strong>
<br/>
@foreach($permission as $value)
<label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
{{ $value->name }}</label>
<br/>
@endforeach
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-sm btn-rose">Submit</button>
</div>
</div>
{!! Form::close() !!}






                        </div>
                </div>
           </div>
        </div>
  </div>
</div>
@endsection    