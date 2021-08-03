@extends('layouts.app')
@section('content')
<<<<<<< HEAD
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/pix_2.jpg');">
=======
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/pix_2.jpg')}});">
>>>>>>> feccc51cf25ba89b340ab6c1046f33688528b833
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><i>Write Like A </i><b>Ninja</b></span> </p>
<<<<<<< HEAD
       <h1 class="mb-0 bread">Post your thoughts here</h1>
=======
       <h1 class="mb-0 bread">Welcome to our website</h1>
>>>>>>> feccc51cf25ba89b340ab6c1046f33688528b833
     </div>
   </div>
 </div>
</section>
<<<<<<< HEAD
<section class="ftco-section bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->
              <div class="card-body">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title for your post">

                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="postThumb">Image</label>
                    <input type="file" name="postThumb" class="form-control" id="postThumb" >
                  </div>
                  <input type="submit" class="btn btn-primary" name="submit" value="Post">
                </form>
            </div>
        </div>
    </div>
</div>
</section>

=======
{{-- <section class="ftco-section bg-light"> --}}
    <main class="profile-page">
        <section class="section section-skew">
          <div class="container">
            <div class="card card-profile shadow mt--300">
              <div class="px-4">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="{{asset('images/about-1.jpg')}}" class="rounded-circle">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                    <div class="card-profile-actions py-4 mt-lg-0">
                      <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                      <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                    </div>
                  </div>
                  <div class="col-lg-4 order-lg-1">
                    <div class="card-profile-stats d-flex justify-content-center">
                      <div>
                        <span class="heading">22</span>
                        <span class="description">Friends</span>
                      </div>
                      <div>
                        <span class="heading">10</span>
                        <span class="description">Photos</span>
                      </div>
                      <div>
                        <span class="heading">89</span>
                        <span class="description">Comments</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center mt-5">
                  <h3>Jessica Jones
                    <span class="font-weight-light">, 27</span>
                  </h3>
                  <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Bucharest, Romania</div>
                  <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer</div>
                  <div><i class="ni education_hat mr-2"></i>University of Computer Science</div>
                </div>
                <div class="mt-5 py-5 border-top text-center">
                  <div class="row justify-content-center">
                    <div class="col-lg-9">
                      <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
                      <a href="#">Show more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
{{-- </section> --}}
>>>>>>> feccc51cf25ba89b340ab6c1046f33688528b833

@endsection