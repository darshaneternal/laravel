    @extends('layouts.default')
    <br><br>

        @if(Auth::user())
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                </div>
            </div>
        </div>
    


    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
       
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class=""></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
     
    </ul><br><br>
   

    <a class="btn btn-info " href="{{ route('userRegistrationAdmin.create') }}"> Admin</a> <br><br>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>User Registration</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('userRegistration.create') }}"> Create New User</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>LastName</th>
                <th>Gender</th>
                <th width="280px">Action</th>
            </tr>
        @foreach ($registeruser as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->lastname}}</td>
            <td>{{ $user->gender}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('userRegistration.show',$user->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('userRegistration.edit',$user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['userRegistration.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
    </div>

        {!! $registeruser->render() !!}
     @else
        <h1 class="text-center"> Please Login </h1>
        <script type="text/javascript">
                window.location = "login";//here double curly bracket
        </script>

    @endif