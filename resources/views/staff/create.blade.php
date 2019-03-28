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
                    	<!-- <form>
                    							<ul class="form-style-1">
                    							<li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" /> <input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
                    							<li>
                    							<label>Email <span class="required">*</span></label>
                    							<input type="email" name="field3" class="field-long" />
                    							</li>
                    							<li>
                    							<label>Subject</label>
                    							<select name="field4" class="field-select">
                    							<option value="Advertise">Advertise</option>
                    							<option value="Partnership">Partnership</option>
                    							<option value="General Question">General</option>
                    							</select>
                    							</li>
                    							<li>
                    							<label>Your Message <span class="required">*</span></label>
                    							<textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
                    							</li>
                    							<li>
                    							<input type="submit" value="Submit" />
                    							</li>
                    							</ul>
                    							</form> -->
						<ul class="form-style-1">
						{!! Form::open(['route' => ['staff.store'], 'method'=> 'POST','files' => true]) !!}
						 <div class="form-group">
				            {!! Form::label('file', 'IMG File:') !!}
				            {!! Form::file('file', ['class' => 'field-select'] ) !!}
				            
				         </div>
				          <div class="form-group">
				            {!! Form::label('name', 'Họ tên:') !!} <br>
				            {!! Form::text('name','', ['class' => 'field-long', 'placeholder' => 'enter your name']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('birth', 'Ngày sinh') !!} <br>
				             {!! Form::date('birth', ' ', ['class' => 'form-group', 'placeholder' => 'your birth']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('sex', ' Giới tính:') !!} 
				            {!! Form::select('sex', App\Staff::$staff_sex,['class' => 'field-select']) !!} 
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('CMND', 'CMND:') !!} <br>
				            {!! Form::text('CMND','', ['class' => 'field-long', 'placeholder' => 'enter your CMND']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('SDT', 'Số điện thoại:') !!} <br>
				            {!! Form::text('SDT','', ['class' => 'field-long', 'placeholder' => 'enter your number phone']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('Email', 'Email:') !!} <br>
				            {!! Form::email('Email','', ['class' => 'field-long', 'placeholder' => 'enter your email']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('id_department', 'Mã phòng:') !!} <br>
				            {!! Form::text('id_department','', ['class' => 'form-group', 'placeholder' => 'enter id department']) !!}
				          </div><br>
				          <div class="form-inline">
				            {!! Form::label('position', 'Vị trí:') !!}
				            {!! Form::select('position', App\Staff::$staff_position,['class' => 'form-control']) !!} 
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