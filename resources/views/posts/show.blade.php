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
    {{-- <img src="{{asset('storage/'.trim($post['image']->path))}}" /> --}}
      <div style="background-image: url('{{$post['image']->url()}}'); min-height: 500px; color:white; text-align: center; background-attachment: fixed;">
        <h1 style="padding-top: 100px; text-shadow: 1px 2px #000">
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
    <br>
    
    </h1>
  
    <br><br>
    <p>{{$post->content}}</p>
    <p class="text-muted"> @tags(['tags' => $post['tags']])  @endtags </p>
    <div style="text-align: right;">
      <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-pencil bg-dark"></i> Edit Post</a>
    </div>
    <p class="text-muted"> @updated(['time' => true, 'date' => $post->created_at, 'name' => $post['user']->name, 'userId' => $post['user']->id]) @endupdated</p>
    <p class="text-muted"> @updated(['time' => $post->updated_at, 'date' => $post->updated_at]) Updated @endupdated</p>

    <div class="container mt-5">
      <div class="row d-flex ">
        <div class="col-md-8">
          <div class="card p-3 mt-2">
            
            {{-- <form action="{{route('post.comment.store', $post->id)}}" method="POST">
              @csrf()
              <div class="form-group"><br>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-md btn-block">Add a Comment</button>
            </form> --}}
            @commentForm(['route' => route('post.comment.store', $post->id)]) @endcommentForm
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row d-flex ">
      <div class="col-md-8">
        <div class="headings d-flex justify-content-between align-items-center mb-3">
          <h5>Latest Comments</h5>
        </div>
        @forelse($post['comments'] as $comment)
        <div class="card p-3 mt-2">
          <div class="d-flex justify-content-between align-items-center">
            <div class="user d-flex flex-row align-items-center"> 
              <img src="https://i.imgur.com/hczKIze.jpg" width="40" class="user-img rounded-circle mr-2">
                <span><small class="font-weight-bold text-primary">James Olesenn</small>
                  <p><small class="font-weight-bold">{{$comment->description}}</small></p>
                </span>
            </div>
            {{dd($comment)}}
            <small>@updated(['time' => true, 'date' => $comment->created_at]) @endupdated</small>
          </div>
          <div class="action d-flex justify-content-between mt-2 align-items-center">
            <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
            <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
          </div>
        </div>
        @empty
          <p>No Comments Here..!!</p>
        @endforelse
      </div>
    </div>
  </div>
</section>
@endsection