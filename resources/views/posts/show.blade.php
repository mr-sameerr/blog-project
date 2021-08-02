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
  <h1>{{$post->title}} 
    @badge(['type', 'show' => (new Carbon\Carbon())->diffInDays($post->created_at) < 1])
      New Post !
    @endbadge
  </h1>
   <p>{{$post->content}}</p>
   <!-- <p class="text-muted">Added {{$post->created_at->diffForHumans()}} by {{$post['user']->name}}</p> -->
   <p class="text-muted"> @tags(['tags' => $post['tags']])  @endtags </p>
   <p class="text-muted"> @updated(['time' => true, 'date' => $post->created_at, 'name' => $post['user']->name]) @endupdated</p>
   <p class="text-muted"> @updated(['time' => $post->updated_at, 'date' => $post->updated_at]) Updated @endupdated</p>

   <h4>Commets</h4>
   @forelse($post['comments'] as $comment)
        <p>{{$comment->description}}</p>
        <p class="text-muted"> @updated(['time' => true, 'date' => $comment->created_at]) @endupdated </p>
   @empty
        <p>No Comments Here..!!</p>
   @endforelse
</div>
</section>


@endsection