@extends('layouts.impact')
@section('title')
Item Owned
@endsection

@section('mota')
Show Location.
I think it's ok!!!
@endsection
@section('content')
<div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
             
               <div class="row">
                    <div class="col-md-12 fade-up">
                        <table class="zui-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Location</th>
                                    <th>Staff</th>
                                    <th>Phòng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($location as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->staff->name}}</td>
                                    <td>{{$data->department->name}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                         
                            @include('layouts.pagination', ['result'=>$location])
                    </div>
                </div>
                
                <div class="gap"></div>  
                <div class="gap"></div>   
            </div>      
        </section>
    </div>
@endsection