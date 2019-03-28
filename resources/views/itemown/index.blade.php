@extends('layouts.impact')
@section('title')
Item Owned
@endsection

@section('mota')
Show item owned.
I think it's ok!!!
@endsection
@section('content')
<div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
             
               <div class="gap"></div>
                <div class="row fade-up">
                	@foreach($itemOwn as $item)
                    <div class="col-md-6">
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="{{asset($item->item->itemgoc->file->file->url) }}">
                            <blockquote>
                                <p><b>Vị trí: </b>{{$item->position}} &nbsp;&nbsp;<b>Phòng: </b>{{$item->department['name']}}<b> Item: </b>{{$item->item->itemgoc->name}} </p>
                                <small>Staff: <cite title="Source Title">{{$item->staff['name']}}</cite></small>
                            </blockquote>
                        </div>
                    </div>
                    @endforeach
                </div>
                @include('layouts.pagination', ['result'=>$itemOwn])
                
                <div class="gap"></div>  
                <div class="gap"></div>   
            </div>      
        </section>
    </div>
@endsection