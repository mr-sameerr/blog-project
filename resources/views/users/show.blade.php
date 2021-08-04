@extends('layouts.app')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/pix_2.jpg')}});">

  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><i>Write Like A </i><b>Ninja</b></span> </p>
       <h1 class="mb-0 bread">{{$user->name}}</h1>
     </div>
   </div>
 </div>
</section>
<section class="section section-skew">
  <div class="container">
    <div class="card card-profile shadow mt--300">
      <div class="px-4">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2" style="text-align: center;">
            <div class="card-profile-image" style="margin-top: -44px;">
              <a href="#">
                <img src="{{asset('/images/person_1.jpg')}}" class="profile-avatar" >
              </a>
            </div>
          </div>
          <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
            <div class="card-profile-actions py-4 mt-lg-0">
              <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
              <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-default float-right "><i class="fa fa-edit"></i> Edit</a>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            {{-- <div class="card-profile-stats d-flex justify-content-center">
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
            </div> --}}
          </div>
        </div>
        <div class="text-center mt-5">
          <h3>{{$user->name}}</h3>
          <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Bucharest, Romania</div>
          <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{$user->email}}</div>
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
{{-- {{$user}} --}}
<style>
  .profile-avatar{
    display: inline-block;
    width: 200px;
    height: 200px;
    border-radius: 50%;

    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    text-align: center;
  }
</style>

@endsection