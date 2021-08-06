@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/pix_2.jpg')}});">
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
    @if($post->image)
    
      <div style="background-image: url('{{$post['image']->url()}}'); min-height: 500px; color:white; text-align: center; background-attachment: fixed;">
        <h1 style="padding-top: 100px; text-shadow: 1px 2px #000">
        <a style="text-align: right" href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-pencil bg-dark"></i> edit</a>
    @else
      <h1>
    @endif
      {{$post->title}} 
      @badge(['type', 'show' => (new Carbon\Carbon())->diffInDays($post->created_at) < 1])
        New Post
      @endbadge
      <i></i>
    @if($post->image)
        </h1>
      </div>
    @else
      </h1>
    @endif
  </h1>
  
  <br><br>
  <p>{{$post->content}}</p>
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