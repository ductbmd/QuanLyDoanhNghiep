@extends('layouts.impact')
@section('title')
Warehouse
@endsection

@section('mota')
Edit a warehouse info.
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
						{!! Form::open(['route' => ['warehouse.update','id'=>$warehouse->id], 'method'=> 'PUT']) !!}
						
				           <div class="form-group">
				            {!! Form::label('name', 'Tên kho:') !!} <br>
				            {!! Form::text('name',$warehouse->name, ['class' => 'field-long', 'placeholder' => 'enter warehouse name']) !!}
				          </div><br>
				          
				          <div class="form-group">
				            {!! Form::label('location', 'Vị trí:') !!} <br>
				            {!! Form::text('location',$warehouse->location, ['class' => 'field-long', 'placeholder' => 'enter localtion of ware house']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('status', 'Số lượng trong kho:') !!} <br>
				            {!! Form::number('status',$warehouse->status, ['class' => 'field-long', 'placeholder' => 'enter status','min'=>0,'step'=>'1']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('max', 'Sức chứa:') !!} <br>
				            {!! Form::number('max',$warehouse->max, ['class' => 'field-long', 'placeholder' => 'enter max','min'=>0,'step'=>'1']) !!}
				          </div><br>
				          

				          <button type="submit" class="btn btn-primary btn-lg">Update</button>

				        {!! Form::close() !!}
				        {!! Form::open(['route' => ['warehouse.destroy','id'=>$warehouse->id], 'method'=> 'DELETE']) !!}
				        <br>
				        <button type="submit" class="btn btn-warning btn-lg">Delete</button>
				        {!! Form::close() !!}
					</ul>	
					</div>
				</div>
			 </div>      
        </section>
    </div>			
					
		@endsection