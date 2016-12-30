    @extends('layouts.default')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Admin OGM</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('productCRUD.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        
        </table>
        
    @endsection