@extends('layouts.impact')
@section('title')
Item
@endsection

@section('mota')
Edit item info.
I think it's ok!!!
@endsection
@section('content')
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                    	<img class="img-responsive img-blog" src="{{asset($item->file->file->url)}}" alt="item" />
                    	<ul class="form-style-1">
						{!! Form::open(['route' => ['item.update','id'=>$item->id], 'method'=> 'PUT','files' => true]) !!}
						 <div class="form-group">
				            {!! Form::label('file', 'New IMGfile:') !!}
				            {!! Form::file('file[]', ['class' => 'field-select'] ) !!}
				            
				         </div>
				          <div class="form-group">
				            {!! Form::label('name', 'Tên :') !!} <br>
				            {!! Form::text('name',$item->name, ['class' => 'field-long', 'placeholder' => 'enter name of item']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('unit', 'Đơn vị') !!}
				            {!! Form::select('unit', App\Item::$item_unit,$item->unit,['class' => 'field-select']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('quantity', 'Số lượng:') !!} 
				            {!! Form::number('quantity',$item->quantity, ['class' => 'field-long', 'placeholder' => 'enter quantity','min'=>0,'step'=>'1']) !!} 
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('quality', 'Chất lượng:') !!} 
				            {!! Form::number('quality',$item->quality, ['class' => 'field-long', 'placeholder' => 'enter quantity','min'=>0,'max'=>10,'step'=>'1']) !!}  
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('price', 'Giá thành:') !!} <br>
				            {!! Form::number('price',$item->price, ['class' => 'field-long', 'placeholder' => 'enter price','min'=>0,'step'=>'1']) !!} 
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('type', 'Loại đồ:') !!}
				            {!! Form::select('type', App\Item::$item_type,$item->type,['class' => 'field-select']) !!} 
				          </div><br>

				          <button type="submit" class="btn btn-primary btn-lg">Submit</button>

				        {!! Form::close() !!}
				        {!! Form::open(['route' => ['item.destroy','id'=>$item->id], 'method'=> 'DELETE']) !!}
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