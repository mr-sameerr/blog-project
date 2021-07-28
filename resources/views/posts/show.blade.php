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
   <h1>{{$post->title}}</h1>
   <p>{{$post->content}}</p>

   <h4>Commets</h4>
   @forelse($post['comments'] as $comment)
        <p>{{$comment->description}}</p>
        <p class="text-muted">{{$comments->created_at->diffForHumans()}}</p>
   @empty
        <p>No Comments Here..!!</p>
   @endforelse
</div>
</section>


@endsection