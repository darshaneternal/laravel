    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    {!! Form::textarea('lastname', null, array('placeholder' => 'Lastname','class' => 'form-control','style'=>'height:100px')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group"> <br><br>
                <strong>Gender:</strong>
                <br><br>
                        Male {{ Form::radio('gender', 'male') }}<br>
                        Female {{ Form::radio('gender', 'female', true) }}
                </div>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group"> <br><br>
                <strong>Vehicle</strong>
                <br><br>
                       <div class='span5' style='margin-left:0px !important;'>
                            <label>
                                Sparks 
                               {{ Form::checkbox('vehicle[]', 'Sparks') }}
                        </div>
                         <div class='span5' style='margin-left:0px !important;'>
                            <label>
                                Stead 
                               {{ Form::checkbox('vehicle[]', 'Stead') }}
                             
                        </div>
                         <div class='span5' style='margin-left:0px !important;'>
                            <label>
                                North Reno 
                               {{ Form::checkbox('vehicle[]', 'North Reno') }}
                        </div>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>