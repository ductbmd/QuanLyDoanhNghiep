@extends('layouts.impact')
@section('title')
Customer
@endsection

@section('mota')
Show customer info
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
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>CMND</th>
                                    <th>SDT</th>
                                    <th>Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->birth}}</td>
                                    <td>{{App\Customer::$customer_sex[$data->sex]}}</td>
                                    <td>{{$data->CMND}}</td>
                                    <td>{{$data->SDT}}</td>
                                    <td>{{$data->Email}}</td>
                                    <
                                    <td><a href="{{route('customer.edit',$data->id)}}">edit</a> </td>
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