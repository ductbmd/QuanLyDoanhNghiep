@extends('layouts.impact')
@section('title')
Deal
@endsection

@section('mota')
Import item.
I think it's ok!!!
@endsection
@section('content')
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                    	<ul class="form-style-1">
						{!! Form::open(['route' => ['deal.import.store'], 'method'=> 'POST','files' => true]) !!}
						 {!!Form::hidden('type',1)!!}
				          <div class="form-group">
				            {!! Form::label('staff_id', 'Staff ID :') !!} <br>
				            {!! Form::text('staff_id','', ['class' => 'field-long', 'placeholder' => 'enter staff id']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('customer_id', 'Customer ID') !!}
				            {!! Form::text('customer_id','', ['class' => 'field-long', 'placeholder' => 'enter staff id']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('discount', 'Discount:') !!} 
				            {!! Form::number('discount','0', ['class' => 'field-long', 'placeholder' => 'enter discount','min'=>0,'max'=>100,'step'=>'1']) !!} 
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('description', 'Description:') !!} <br>
				            {!! Form::textarea('description','', [ 'placeholder' => 'enter description']) !!}
				          </div><br>

				          <button type="submit" class="btn btn-primary btn-lg">Submit</button>

				        {!! Form::close() !!}
					</ul>	
					</div>
				</div>
			 </div>      
        </section>
    </div>			
					
		@endsection