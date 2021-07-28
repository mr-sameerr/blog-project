@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/pix_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><i>Write Like A </i><b>Ninja</b></span> </p>
       <h1 class="mb-0 bread">Welcome to our website</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section bg-light">
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success" style="margin: -84px 0 48px 0;">
            {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
    <div class="row d-flex">
      {{-- <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
          </a>
          <div class="text d-block">
           <div class="meta">
            <p>
             <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
             <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
             <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
           </p>
         </div>
         <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
         <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
       </div>
     </div>
   </div> --}}

   <div class="col-lg-4 ftco-animate">
    <div class="blog-entry">
      <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
      </a>
      <div class="text d-block">
       <div class="meta">
        <p>
         <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
         <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
         <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
       </p>
     </div>
     <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
     <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
   </div>
 </div>
</div>
<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>

@foreach ($posts as $post)
    
<div class="col-lg-4 ftco-animate">
    <div class="blog-entry">
        <a href="{{route('posts.show', $post->id)}}" class="block-20" style="background-image: url('images/image_4.jpg');"></a>
        <div class="text d-block">
            <div class="meta">
                <p>
                   <a href="#"><span class="fa fa-calendar mr-2"></span> {{date('Y, m d', strtotime($post->created_at))}}</a>
                   <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                   <a href="{{route('posts.show', $post->id)}}" class="meta-chat"><span class="fa fa-comment mr-2"></span> {{$post->comments_count}}</a>                    
                </p>
                <p>
                   <a href="{{route('posts.edit', $post->id)}}" class="meta-chat"><span class="fa fa-edit mr-2"></span></a> 
                </p>
                <p>
                    <a class="meta-chat" href="{{ route('posts.destroy', $post->id) }}" onclick="event.preventDefault(); 
                    document.getElementById('delete-form').submit();">
                    <i class="fa fa-trash"></i></a>
                    <form id="delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </p>
            </div>
            <h3 class="heading"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3>
            <p>{!!str_limit(($post->content), 300)!!}</p>
            <p><a href="{{route('posts.show', $post->id)}}" class="btn btn-secondary py-2 px-3">Read more</a></p>
        </div>
    </div>
</div>
@endforeach

{{-- <div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div> --}}
<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
       <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
       <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
     </p>
   </div>
   <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
   <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
</div>
</section>
<!-- <div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div>
</div>
</div> -->

@endsection