@extends('layouts.dashboardnav')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
                 
                        @if ($errors->any())
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
                                  <h4 class="card-title">Create dummy data-</h4>
                                </div> 

                              <div class="card-body ">
                               <form action="{{ route('dummys.store') }}" method="POST">

                                @csrf
                                <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-sm btn-rose pull-left">Submit</button>
                                <div class="pull-right">
                                                        <a class="btn btn-sm btn-rose" href="{{ route('dummys.index') }}"> Back</a>
                                                        </div>
                                </div>
                                </div>
                                </form>
                                </div>

                         </div>
                </div>
        </div>
</div>

</div>


@endsection