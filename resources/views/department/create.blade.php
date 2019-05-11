@extends('layouts.impact')
@section('title')
department
@endsection

@section('mota')
Create a new department info.
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
						{!! Form::open(['route' => ['department.store'], 'method'=> 'POST']) !!}
						
				          <div class="form-group">
				            {!! Form::label('name', 'Tên phòng:') !!} <br>
				            {!! Form::text('name','', ['class' => 'field-long', 'placeholder' => 'enter department name']) !!}
				          </div><br>
				          
				          <div class="form-group">
				            {!! Form::label('description', 'Mô tả:') !!} <br>
				            {!! Form::text('description','A1', ['class' => 'field-long', 'placeholder' => 'enter description']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('type', 'Loại phòng:') !!} <br>
				            {!! Form::select('type',App\Department::$Department_type, ['class' => 'field-long']) !!}
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