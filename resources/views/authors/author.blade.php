@if($author->description == null )
	    No description found
@endif

{!! $author->description !!}

<h3>Book published by {!! $author->name !!} </h3>
@foreach($author->books as $book)                
    {!! $book->title !!}<br>
@endforeach

