<h1>Users authorize for {!!$role->name!!}</h1>
@foreach( $role->users as $role->user)
    <h3>User: {!! $role->user->name !!}</h3>
@endforeach