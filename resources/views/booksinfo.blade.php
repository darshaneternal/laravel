
@foreach( $books as $book )

        <div>
        		
        
        		<div>{{ $book->description }}</div>
        		<div>{{'Published by-'. $book->author->name }}</div>
        		<?php echo'------------------'; ?>
        </div>
@endforeach