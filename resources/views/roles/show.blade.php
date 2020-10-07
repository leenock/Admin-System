@extends('layouts.dashboardnav')

@section('content')
<div class="content">
  <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                     </div>
                      <h4 class="card-title">Role Profile -</h4>
                 </div>           
                        <div class="card-body">
                          <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                        <strong>Name:</strong>
                                        {{ $role->name }}
                                        </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="form-group">
                                     <strong>Permissions:</strong>
                                        @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                        <label class="label label-success">{{ $v->name }},</label>
                                        @endforeach
                                        @endif
                                   </div>
                                </div>
                          </div>
                          <a class="btn btn-sm  btn-rose pull-right" href="{{ route('roles.index') }}"> Back</a>

                        </div>
                </div>
           </div>
        </div>
  </div>
</div>
@endsection       