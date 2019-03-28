@extends('layouts.impact')
@section('title')
Staff
@endsection

@section('mota')
Create a new staff info
I think it's ok
@endsection
@section('content')
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                    	<img class="img-responsive img-blog" src="{{asset($staff->file->url)}}" alt="item" />
                    	<ul class="form-style-1">
						{!! Form::open(['route' => ['staff.update','id'=>$staff->id], 'method'=> 'PUT','files' => true]) !!}
							<div class="form-group">
				            {!! Form::label('file', 'IMG File:') !!}
				            {!! Form::file('file', ['class' => 'field-select'] ) !!}
				         	</div>
				          <div class="form-group">
				            {!! Form::label('name', 'Họ tên:') !!} <br>
				            {!! Form::text('name',$staff->name, ['class' => 'field-long', 'placeholder' => 'enter your name']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('birth', 'Ngày sinh') !!} <br>
				             {!! Form::date('birth', $staff->birth, ['class' => 'field-long', 'placeholder' => 'your birth']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('sex', ' Giới tính:') !!} 
				            {!! Form::select('sex', App\Staff::$staff_sex,$staff->sex,['class' => 'field-select']) !!} 
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('CMND', 'CMND:') !!} <br>
				            {!! Form::text('CMND',$staff->CMND, ['class' => 'field-long', 'placeholder' => 'enter your CMND']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('SDT', 'Số điện thoại:') !!} <br>
				            {!! Form::text('SDT',$staff->SDT, ['class' => 'field-long', 'placeholder' => 'enter your number phone']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('Email', 'Email:') !!} <br>
				            {!! Form::email('Email',$staff->Email, ['class' => 'field-long', 'placeholder' => 'enter your email']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('id_department', 'Mã phòng:') !!} <br>
				            {!! Form::text('id_department',$staff->id_department, ['class' => 'form-group', 'placeholder' => 'enter id department']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('position', 'Vị trí:') !!}
				            {!! Form::select('position', App\Staff::$staff_position,$staff->position,['class' => 'field-select']) !!} 
				          </div><br>

				          <button type="submit" class="btn btn-primary btn-lg">Update</button>

				        {!! Form::close() !!}
				        {!! Form::open(['route' => ['staff.destroy','id'=>$staff->id], 'method'=> 'DELETE']) !!}
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