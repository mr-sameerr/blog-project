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
     <div class="row justify-content-center pb-4">
         <div class="col-md-12 heading-section text-center ftco-animate">
           <span class="subheading">Latest Posts</span>
           {{-- <h2 class="mb-4">Trending Posts</h2> --}}
       </div>
   </div>
   <div class="row">
    @forelse($posts as $post)
      <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
                <a href="#" class="img" style="background-image: url(images/work-1.jpg);">
                  <span class="price">Software</span>
              </a>
              <div class="text p-4">
                  <h3><a href="#">{{ucwords($post->title)}}</a></h3>
                  <p class="advisor">Advisor <span>Tony Garret</span></p>
                  <ul class="d-flex justify-content-between" style="border-top: white">
                      <li><span class="flaticon-shower"></span>2300</li>
                      <li class="price">$199</li>
                  </ul>
              </div>
          </div>
      </div>
      @empty

      @endforelse
  

</div>
</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading" style="color: white !important">Most Active Users</span>
        {{-- <h2 class="mb-4">Trending Posts</h2> --}}
      </div>
    </div>
    <div class="row">
      @forelse($activeAuthors as $author)
        <div class="col-md-2 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-graduated"></span></div>
            <div class="text">
              <strong class="number" data-number="{{$author->posts_count}}">0</strong>
              <span>{{$author->name}}</span>
            </div>
          </div>
        </div>
      @empty

      @endforelse
      
      {{-- <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 d-flex align-items-center">
          <div class="icon"><span class="flaticon-graduated"></span></div>
          <div class="text">
            <strong class="number" data-number="4500">0</strong>
            <span>Students Enrolled</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 d-flex align-items-center">
          <div class="icon"><span class="flaticon-instructor"></span></div>
          <div class="text">
            <strong class="number" data-number="1200">0</strong>
            <span>Experts Instructors</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 d-flex align-items-center">
          <div class="icon"><span class="flaticon-tools"></span></div>
          <div class="text">
            <strong class="number" data-number="300">0</strong>
            <span>Hours Content</span>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
 </section>
 <section class="ftco-section bg-light">

  <div class="container">
     <div class="row justify-content-center pb-4">
         <div class="col-md-12 heading-section text-center ftco-animate">
           <span class="subheading">Most Commented Posts</span>
           {{-- <h2 class="mb-4">Trending Posts</h2> --}}
       </div>
   </div>
   <div class="row">
    @forelse($mostCommented as $post)
      <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
                <a href="#" class="img" style="background-image: url(images/work-1.jpg);">
                  <span class="price">Software</span>
              </a>
              <div class="text p-4">
                  <h3><a href="#">{{ucwords($post->title)}}</a></h3>
                  <p class="advisor">Advisor <span>Tony Garret</span></p>
                  <ul class="d-flex justify-content-between" style="border-top: white">
                      <li><span class="flaticon-shower"></span>2300</li>
                      <li class="price">$199</li>
                  </ul>
              </div>
          </div>
      </div>
      @empty

      @endforelse
  

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