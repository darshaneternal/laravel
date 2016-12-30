    @extends('layouts.default')
     
    @section('content')
    
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h5> Show User</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('userRegistration.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    {{ $product->lastname}}
                </div>
            </div>
        </div>
    @endsection