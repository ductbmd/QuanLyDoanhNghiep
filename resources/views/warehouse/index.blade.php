@extends('layouts.impact')
@section('title')
Warehouse
@endsection

@section('mota')
Show warehouse info
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
                                    <th>Tên kho</th>
                                    <th>Vị trí</th>
                                    <th>Số lượng trong kho</th>
                                    <th>Sức chứa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->location}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->max}}</td>
                                    <td><a href="{{route('warehouse.edit',$data->id)}}">edit</a> </td>
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