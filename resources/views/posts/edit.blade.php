@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/pix_2.jpg')}}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><i>Write Like A </i><b>Ninja</b></span> </p>
       <h1 class="mb-0 bread">Edit Post</h1>
     </div>
   </div>
 </div>
</section>
<div class="mr-10" style="text-align: right; padding: 1% 5% 0 0;background: #f9faff">
<a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i>
  Back</a>
</div>
<section class="ftco-section bg-light">
<div class="container">
  @if(Session::has('success'))
    <div class="alert alert-success" style="margin: -84px 0 48px 0;">
      {{Session::get('success')}}
    </div>
  @endif
  @if(Session::has('fail'))
    <div class="alert alert-danger" style="margin: -84px 0 48px 0;">
      {{Session::get('fail')}}
    </div>
  @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group">
                    <label for="post_image">Post Image</label>
                    <input type="file" class="form-control-file" name="post_image">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value="{{$post->title}}" class="form-control" name="title" placeholder="Title for your post">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{$post->content}}</textarea>
                  </div>
                  <button class="btn btn-primary">Update Post</btton>
                </form>
            </div>
        </div>
    </div>
</div>
</section>


@endsection