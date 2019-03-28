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
						{!! Form::open(['route' => ['item.store'], 'method'=> 'POST','files' => true]) !!}
						 <div class="form-group">
				            {!! Form::label('file', 'IMG File:') !!}
				            {!! Form::file('file[]', ['class' => 'field-select'] ) !!}
				            
				         </div>
				          <div class="form-group">
				            {!! Form::label('name', 'Tên :') !!} <br>
				            {!! Form::text('name','', ['class' => 'field-long', 'placeholder' => 'enter name of item']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('unit', 'Đơn vị') !!}
				            {!! Form::select('unit', App\Item::$item_unit,['class' => 'field-select']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('quantity', 'Số lượng:') !!} 
				            {!! Form::number('quantity','1', ['class' => 'field-long', 'placeholder' => 'enter quantity','min'=>0,'step'=>'1']) !!} 
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('quality', 'Chất lượng:') !!} 
				            {!! Form::number('quality','10', ['class' => 'field-long', 'placeholder' => 'enter quantity','min'=>0,'max'=>10,'step'=>'1']) !!}  
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('price', 'Giá thành:') !!} <br>
				            {!! Form::number('price','100000', ['class' => 'field-long', 'placeholder' => 'enter price','min'=>0,'step'=>'1']) !!} 
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('type', 'Loại đồ:') !!}
				            {!! Form::select('type', App\Item::$item_type,['class' => 'field-select']) !!} 
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