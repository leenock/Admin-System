@extends('layouts.dashboardnav')
@section('content')
<div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">User Profile -
                  </h4>
                </div>
                <div class="card-body">
                  <form>     
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                         
                          <input type="text" value="{{ $user->name }}" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input type="text" value="{{ $user->email }}" class="form-control" disabled=""> 
                        </div>
                      </div>
                    </div>
                          
                    <a class="btn btn-sm  btn-rose pull-right" href="{{ route('users.index') }}"> Back</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
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
                  <h6 class="card-category text-gray">Created At / {{ $user->created_at }}</h6>
                  @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                           <a href="#" class="btn btn-rose btn-round">{{ $v }}</a>
                           @endforeach
                                @endif
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection