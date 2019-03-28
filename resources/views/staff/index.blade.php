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
                        <div id="meet-the-team" class="row">
                            @foreach($datas as $data)
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="{{asset($data->file->url)}}" alt="staff" height="400" width="400">
                            <div class="team-content fade-up">
                                <h5>{{$data->name}}<small class="role muted">{{App\Staff::$staff_position[$data->position]}}</small></h5>
                                <p>Room:<b></b>{{$data->department['name']}}</p>
                                <p>{{$data->birth}}&nbsp{{App\Staff::$staff_sex[$data->sex]}}</p>
                                <p><b>CMND:</b>{{$data->CMND}}</p>
                                <p><b>SDT:</b>{{$data->SDT}}</p>
                                <p><b>Email:</b><i>{{$data->Email}}</i></p>
                                <!-- <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                 <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a>  -->
                                 <a class="btn btn-social btn-twitter" href="{{route('staff.edit',$data->id)}}"><span class="glyphicon glyphicon-pencil"></span></a> 
                                 <!-- <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                            @endforeach
                            @include('layouts.pagination', ['result'=>$datas])
                     
                <!--/#meet-the-team-->
						
                         
                            
					</div>
                </div>
             </div>      
        </section>
    </div>          
                    
        @endsection