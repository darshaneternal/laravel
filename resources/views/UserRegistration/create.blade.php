@extends('layouts.default')
    @section('content')
    <br>
     
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h5>Add New User</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('userRegistration.index') }}"> Back</a>
                </div>
            </div>
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
    

        {!! Form::open(array('route' => 'userRegistration.store','method'=>'POST','files'=>true, 'class'=>'register-form')) !!}
             @include('UserRegistration.form')
        {!! Form::close() !!}
@endsection