@extends('layouts.impact')
@section('title')
Item
@endsection

@section('mota')
Create a new item info.
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
						{!! Form::open(['route' => ['itemown.store'], 'method'=> 'POST']) !!}
						 
				          <div class="form-group">
				            {!! Form::label('staff_id','Mã nhân viên') !!} <br>
				            {!! Form::text('staff_id','', ['class' => 'field-long', 'placeholder' => 'enter staff id']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('item_id', 'Mã dụng cụ :') !!}
				            {!! Form::select('item_id',$itemIds,['class' => 'field-select']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('department_id', 'Mã phòng :') !!}
				            {!! Form::select('department_id',$department_ids,['class' => 'field-select']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('position','Vi tri') !!} <br>
				            {!! Form::text('position','', ['class' => 'field-long', 'placeholder' => 'position ex:A1']) !!}
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