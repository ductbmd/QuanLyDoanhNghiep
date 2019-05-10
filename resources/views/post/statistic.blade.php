@extends('layouts.impact')
@section('title')
Post Statistic
@endsection

@section('mota')
Statistic 
Post
@endsection
@section('content')
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Works havn't done in all month</h2>
                </div> 
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
						<table class="zui-table">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($statisticDo as $data)
                                <tr>
                                    <td>{{$data->year}}</td>
                                    <td>{{$data->month}}</td>
                                    <td>{{$data->total_do}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                         
					</div>
                </div>
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Works havn't done in all month</h2>
                </div> 
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                        <table class="zui-table">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($statisticDone as $data)
                                <tr>
                                    <td>{{$data->year}}</td>
                                    <td>{{$data->month}}</td>
                                    <td>{{$data->total_do}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Rate</h2>
                        <hr>
                        <p>Rate post per month</p>
                    </div>               
                </div>
                </div>
                <div class="row">
                    @foreach($rate as $key => $value)
                    <div class="col-md-3">
                        <div class="tile-progress tile-red bounce-in">
                            <div class="tile-header">
                                <h3>Month {{$result = substr($key, 4, 2)}} Year {{$result = substr($key, 0, 4)}}</h3>
                                <span>We love servers and stuff.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="{{$value}}%" style="width: {{$value}}%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">{{$value}}</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
             </div>      
        </section>
    </div>          
                    
        @endsection