<div class="secure">Secure Login form</div>
{!! Form::open(array('url'=>'login','method'=>'POST', 'id'=>'myform')) !!}


<div class="control-group">
  <div class="controls">
     {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
  </div>
</div>
<div class="control-group">
  <div class="controls">
  {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
  </div>
</div>
{!! Form::button('Login', array('class'=>'send-btn')) !!}
{!! Form::close() !!}

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script type="text/javascript">
  
  $(document).ready(function(){
  $('.send-btn').click(function(){            
	    $.ajax({
	      url: 'login',
	      type: "post",
	      data: {'email':$('input[name=email]').val(), 'password':$('input[name=password]').val(), '_token': $('input[name=_token]').val()},
	      success: function(data){
	      }
	    });      
  }); 
});
</script>