@extends('layouts.impact')
@section('title')
Deal
@endsection

@section('mota')
Deal
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
                                    <th>Staff ID</th>
                                    <th>Customer ID</th>
                                    <th>Deposit</th>
                                    <th>Discount</th>
                                    <th>description</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deals as $deal)
                                <tr>
                                    <td>{{$deal->id}}</td>
                                    <td>{{$deal->staff_id}}</td>
                                    <td>{{$deal->customer_id}}</td>
                                    <td>{{$deal->deposit}}</td>
                                    <td>{{$deal->discout}}</td>
                                    <td>{{$deal->description}}</td>
                                    <td>{{$deal->created_at}}</td>
                                    <td><a href="{{route('deal.import.show',$deal->id)}}">more</a> </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                         
                            @include('layouts.pagination', ['result'=>$deals])
					</div>
                </div>
             </div>      
        </section>
    </div>          
                    
        @endsection