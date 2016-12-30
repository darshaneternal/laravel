<h1>{!!$user->name!!} authorized for-</h1>
@foreach( $user->roles as $user->role)
   <h3>Role: {!! $user->role->name !!}</h3>
@endforeach