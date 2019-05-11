@extends('layouts.impact')
@section('title')
News
@endsection

@section('mota')
New post of company
@endsection
@section('content')
<div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                     <div class="blog">
                            <div class="blog-item">
                                <div class="blog-featured-image">
                                    <img class="img-responsive img-blog" src="{{asset($post->file->url)}}" alt="" />
                                    <div class="overlay">
                                        <a class="preview btn btn-outlined btn-primary" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                    </div>  
                                </div>  
                                <div class="blog-content">
                                    <a href="blog-item.html"><h3 class="main-title">The work must to do</h3></a>
                                    <div class="entry-meta">
                                        @if(isset($post->staff->file->url))
                                    	<img src="{{asset($post->staff->file->url)}}" alt="avt"height="30" width="30">
                                        @endif
                                        <span><i class="fa fa-user"></i> <a href="#">{{$post->staff['name']}}</a></span>
                                        <span><i class="fa fa-clock-o"></i> {{$post->created_at}}</span>
                                        <span><i class="fa fa-eye"></i><a href="blog-item.html#comments"><span class="counter">14</span> view</a></span>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-1">
                                            @if(isset($post->item->itemown->staff->file->url))
                                    		<img src="{{asset($post->item->itemown->staff->file->url)}}" alt="avt"height="40" width="40">
                                            @endif
                                    	</div>
                                    	<div class="col-md-4">
                                            @if(isset($post->item->itemgoc->name))
                                    		Dụng cụ: <b>{{$post->item->itemgoc->name}}</b> <br>
                                            @endif
                                            @if(isset($post->item->itemown->staff->name))
                                    		Sở hữu bởi:<b>{{$post->item->itemown->staff->name}}</b><br><br>
                                            @endif
                                    	</div>
                                    	<div class="col-md-6">
                                    		<b>Vị trí đúng:{{$post->item->itemown->position}}<br>
                                    		Vị trí hiện tại:{{$post->localtion}}</b>
                                    	</div>
                                    	
                                    		
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-12">
                                    		<h4>{{$post->description}}</h4>
                                    	</div>
                                    	
                                    </div>
                                    <div class="read-more-wrapper">                                    
                                        <a class="btn btn-outlined btn-primary" href="{{route('post.accept',$post->id)}}">Accept</a>
                                    </div>
                                </div>
                            </div><!--/.blog-item-->
                            
                            
                            
                        </div>
				</div>
			 </div>      
        </section>
    </div>			                    
@endsection