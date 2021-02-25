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
                                   <h4 class="card-title">Update Course fee details- </h4>
                                </div> 

                                <div class="card-body">
                                <form action="{{ route('course_finance.update',$coursefee->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Course Name:</strong>
                                <input type="text" name="Course" value="{{ $coursefee->course_name }}" class="form-control" placeholder="Name">
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Course period:</strong>
                                <input type="text" name="Course_Period" value="{{ $coursefee->course_period }}" class="form-control" placeholder="Name">
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Fee structure:</strong>
                                <input type="text" name="courseamount" value="{{ $coursefee->fee_amount }}" class="form-control" placeholder="Name">
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-sm btn-rose">Submit</button>
                                <a class="btn btn-sm btn-rose" href="{{ route('course_finance.create') }}"> Back</a>
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