@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/pix_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><i>Write Like A </i><b>Ninja</b></span> </p>
       <h1 class="mb-0 bread">Post your thoughts here</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="{{ route('posts.update', $post->id) }}">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value="{{$post->title}}" class="form-control" id="title" placeholder="Title for your post">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3">{{$post->content}}</textarea>
                  </div>
                  <button class="btn btn-primary">Update Post</btton>
                </form>
            </div>
        </div>
    </div>
</div>
</section>


@endsection