@extends('layouts.impact')
@section('title')
Warehouse
@endsection

@section('mota')
Create a new warehouse info.
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
						{!! Form::open(['route' => ['warehouse.store'], 'method'=> 'POST']) !!}
						
				          <div class="form-group">
				            {!! Form::label('name', 'Tên kho:') !!} <br>
				            {!! Form::text('name','', ['class' => 'field-long', 'placeholder' => 'enter warehouse name']) !!}
				          </div><br>
				          
				          <div class="form-group">
				            {!! Form::label('location', 'Vị trí:') !!} <br>
				            {!! Form::text('location','A1', ['class' => 'field-long', 'placeholder' => 'enter localtion of ware house']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('status', 'Số lượng trong kho:') !!} <br>
				            {!! Form::number('status','0', ['class' => 'field-long', 'placeholder' => 'enter status','min'=>0,'step'=>'1']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('max', 'Sức chứa:') !!} <br>
				            {!! Form::number('max','100', ['class' => 'field-long', 'placeholder' => 'enter max','min'=>0,'step'=>'1']) !!}
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