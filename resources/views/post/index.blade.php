@extends('layouts.impact')
@section('title')
News
@endsection

@section('mota')
New post of company
@endsection
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}
    </div>
@endif
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
            	 <div class="row">
                    <div class="col-md-12 fade-up">
                        
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                    </div>
                    <div class="col-md-4 fade-up">

                    </div>
                </div>
                <!-- Gioi thieu cty -->
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Works to do now</h2>
                    <hr>
                    <p>List of work to do or create a new post to do if you see something doesn't in true localtion.</p>
                    <a class="btn btn-outlined btn-primary active" href="{{route('post.create')}}" >Create new post</a>
                </div> 
                <div class="gap"></div>

                <div id="meet-the-team" class="row">
                	@foreach($postDo as $post)
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img height="400" width="400"class="img-responsive img-thumbnail bounce-in" src="{{asset($post->file->url)}}" alt="">
                            <div class="team-content fade-up">
                                <h5>{{$post->staff['name']}}<small class="role muted">{{$post->item->itemgoc['name']}}</small></h5>
                                <p>Localtion now:{{$post->localtion}}</p>
                                <div class="entry-meta"><span><i class="fa fa-clock-o"></i> {{$post->created_at}}</span></div>
                                <a class="btn btn-outlined btn-primary active" href="{{route('post.show',$post->id)}}" ><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!--/#meet-the-team-->
                <div>@include('layouts.pagination', ['result'=>$postDo])</div>
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Works have done</h2>
                    <hr>
                    <p>List of work have done check and see them.</p>
                    <a class="btn btn-outlined btn-primary active" href="{{route('post.create')}}" >Create new post</a>
                </div> 
                <div id="meet-the-team" class="row">
                    <div class="row fade-up">
                    @foreach($postDone as $post)
                    <!-- Bai da lam -->
                        <div class="col-md-6">
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="{{asset($post->file->url)}}">
                            <blockquote>
                                <p>{{$post->description}}</p>
                                <small>Done by staff:<cite title="Source Title">{{$post->staff->name}}</cite></small>
                            </blockquote>
                        </div>
                        </div>
                    
                     <!-- Bai da lam end--> 
                     @endforeach
                     </div> 
                </div>
                <div>@include('layouts.pagination', ['result'=>$postDo])</div>
                <!-- Ranking -->
                <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Ranking</h2>
                        <hr>
                        <p>Ranking of staff per month</p>
                    </div>               
                </div>
                </div>
               <!--  tieu de -->
               <div class="gap"></div>

                 <div id="meet-the-team" class="row">
                    @foreach($topStaffs as $topStaff)

                    @if($topStaff->month != $monthpost)
                    </div>
                    <h2 class="text-center">Month {{$topStaff->month}}</h2>
                    <div id="meet-the-team" class="row">
                    @endif
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img height="400" width="400"class="img-responsive img-thumbnail bounce-in" src="{{asset($topStaff->staff->file->url)}}" alt="">
                            <div class="team-content fade-up">
                                <h5>{{$topStaff->staff['name']}}<small class="role muted">{{$post->item['name']}}</small></h5>
                                <p>Done time:{{$topStaff->total_do}}</p>
                                <div class="entry-meta"><span><i class="fa fa-clock-o"></i> {{$topStaff->month}}</span></div>
                                <a class="btn btn-outlined btn-primary active" href="{{route('post.show',$post->id)}}" ><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php $monthpost =$topStaff->month; ?>
                    @endforeach
                    </div><!--/#meet-the-team-->
             </div>   
        </section>
    </div>          
                    
        @endsection