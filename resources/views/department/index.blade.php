@extends('layouts.impact')
@section('title')
department
@endsection

@section('mota')
Show department info
I think it's ok
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
                                    <th>Tên phòng</th>
                                    <th>Mô tả</th>
                                    <th>Loại phòng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{App\Department::$Department_type[$data->type]}}</td>
                                    
                                    <td><a href="{{route('department.edit',$data->id)}}">edit</a> </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                         
                            @include('layouts.pagination', ['result'=>$datas])
					</div>
                </div>
             </div>      
        </section>
    </div>          
                    
        @endsection