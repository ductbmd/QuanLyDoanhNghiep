@extends('layouts.impact')
@section('title')
Customer
@endsection

@section('mota')
Edit a new customer info.
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
						{!! Form::open(['route' => ['customer.update','id'=>$customer->id], 'method'=> 'PUT']) !!}
						
				          <div class="form-group">
				            {!! Form::label('name', 'Họ tên:') !!} <br>
				            {!! Form::text('name',$customer->name, ['class' => 'field-long', 'placeholder' => 'enter your name']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('birth', 'Ngày sinh') !!} <br>
				             {!! Form::date('birth', $customer->birth, ['class' => 'form-group', 'placeholder' => 'your birth']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('sex', ' Giới tính:') !!} 
				            {!! Form::select('sex', App\Customer::$customer_sex,$customer->sex,['class' => 'field-select']) !!} 
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('CMND', 'CMND:') !!} <br>
				            {!! Form::text('CMND',$customer->CMND, ['class' => 'field-long', 'placeholder' => 'enter your CMND']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('SDT', 'Số điện thoại:') !!} <br>
				            {!! Form::text('SDT',$customer->SDT, ['class' => 'field-long', 'placeholder' => 'enter your number phone']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('Email', 'Email:') !!} <br>
				            {!! Form::email('Email',$customer->Email, ['class' => 'field-long', 'placeholder' => 'enter your email']) !!}
				          </div><br>
				          

				          <button type="submit" class="btn btn-primary btn-lg">Update</button>

				        {!! Form::close() !!}
				        {!! Form::open(['route' => ['customer.destroy','id'=>$customer->id], 'method'=> 'DELETE']) !!}
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