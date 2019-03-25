@extends('layouts.impact')
@section('title')
Item
@endsection

@section('mota')
Show item info.
I think it's ok!!!
@endsection
@section('content')
    <div id="content-wrapper">
        <section id="blog" class="white">
            <div class="container">            
            <div class="gap"></div>
            <div class="row">

                
            </div>
                <div class="row">
                    <aside class="col-sm-4 col-sm-push-8">
                        <div class="widget search">
                            {!! Form::open(['route' => ['item.search'], 'method'=> 'GET','class'=>'form-inline']) !!}
                                {!! Form::text('search','' ,['class' => 'form-control', 'placeholder' => 'search some things']) !!}
                                <button class="btn btn-primary btn-outlined" type="submit"><i class="fa fa-search"></i></button>
                            {!! Form::close() !!}
                            
                        </div><!--/.search--> 

                        <div class="widget categories">
                            <h3 class="widget-title">Blog Categories</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="arrow">
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">News</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="arrow">
                                        <li><a href="#">Nature</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Tutorial</a></li>
                                        <li><a href="#">Samples</a></li>
                                    </ul>
                                </div>
                            </div>                     
                        </div><!--/.categories-->
                        <div class="widget tags">
                            <h3 class="widget-title">Post Tags</h3>
                            <ul class="tag-cloud">
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Fashion</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Video</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">WordPress</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Plugins</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Downloads</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Freebies</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Envato</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Tutorial</a></li>
                                <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Update</a></li>
                            </ul>
                        </div><!--/.tags-->

                    </aside>        
                    <div class="col-sm-8 col-sm-pull-4">
                        @foreach($datas as $data)
                        <div class="blog">
                            <div class="blog-item">
                                <div class="blog-featured-image">
                                    <img class="img-responsive img-blog" src="{{asset($data->file->file->url)}}" alt="item" />
                                    <div class="overlay">
                                        <a class="preview btn btn-outlined btn-primary" href="#" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                    </div>  
                                </div>  
                                <div class="blog-content">
                                   <h3><b>Tên :</b>{{$data->name}}</h3><br>
                                   <h3><b>Đơn vị:</b>{{App\Item::$item_unit[$data->unit]}}</h3><br>
                                   <h3><b>Số lượng:</b>{{$data->quantity}}</h3><br>
                                   <h3><b>Chất lượng :</b>{{$data->quality}}</h3><br>
                                   <h3><b>Giá thành :</b>{{$data->price}}</h3><br>
                                   <h3><b>Loại đồ::</b>{{App\Item::$item_type[$data->type]}}</h3><br>
                                    <div class="read-more-wrapper">                                    
                                        <a class="btn btn-outlined btn-primary" href="{{route('item.edit',[$data->id])}}">Edit</a>
                                    </div>
                                </div>
                            </div><!--/.blog-item-->
                        </div>
                        @endforeach
                        @include('layouts.pagination', ['result'=>$datas])
                    </div>
                    </div><!--/.col-md-8-->
                </div><!--/.row-->
            </div>
        </section><!--/#blog-->
    </div>


@endsection