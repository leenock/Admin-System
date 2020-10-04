@extends('layouts.dashboardnav')

@section('content')
<div class="container-fluid">
          <div class="row">

                <div class="col-lg-12 margin-tb">
                     <div class="pull-left">
                          <h2> Show Dummy</h2>
                      </div>
                         <div class="pull-right">
                         <a class="btn btn-primary" href="{{ route('dummys.index') }}"> Back</a>
                          </div>
                  </div>
        </div>


        <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{{ $dummy->name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Details:</strong>
{{ $dummy->detail }}
</div>
</div>
</div>


@endsection       