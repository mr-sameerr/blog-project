@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/pix_2.jpg')}});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><i>Write Like A </i><b>Ninja</b></span> </p>
        <h1 class="mb-0 bread">{{$userProfile->name}}</h1>
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
              <a href="#"><img src="{{$userProfile->image ? $userProfile->image->url() : ''}}" class="profile-avatar" ></a>
            </div>
          </div>
          <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
            <div class="card-profile-actions py-4 mt-lg-0">
              <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
              <a href="{{route('user.edit', $userProfile->id)}}" title="Edit Your Profile" class="btn btn-sm btn-default float-right "><i class="fa fa-edit"></i> Edit</a>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
          </div>
        </div>
        <div class="text-center mt-5">
          <h3>{{$userProfile->name}}</h3>
          <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Bucharest, Romania</div>
          <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{$userProfile->email}}</div>
          <div><i class="ni education_hat mr-2"></i>University of Computer Science</div>
        </div>
        <div class="mt-5 py-5 border-top text-center">
          <div class="row">
            <div class=" col-md-6">
              <div class="card p-3 mt-2">
                <div class="justify-content-between align-items-center">
                  <div class="bio-desk">
                    <h4 class="red">Total Posts</h4>
                    <h5>{{$userProfile->posts()->count()}}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card p-3 mt-2">
                <div class="justify-content-between align-items-center">
                  <div class="bio-desk">
                    <h4 class="terques">Total Comments </h4>
                    <p>Deadline : 15 August</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card p-3 mt-2">
                <div class="justify-content-between align-items-center">
                  <div class="bio-desk">
                    <h4 class="green">VectorLab Portfolio</h4>
                    <p>Deadline : 15 August</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card p-3 mt-2">
                <div class="justify-content-between align-items-center">
                  <div class="bio-desk">
                    <h4 class="purple">Adobe Muse Template</h4>
                    <p>Deadline : 15 August</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5 py-5 border-top text-center">
          <div class="row d-flex ">
            <div class="col-md-8">
              <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Comments here as</h5>
              </div>
              @commentForm(['route' => route('user.comment.store', $userProfile->id)]) @endcommentForm
          </div>
        </div>
      </div>
      
      <div class="row py-5">
        <div class="container mt-5">
          <div class="row d-flex ">
            <div class="col-md-8">
              <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Recent Comments on {{$userProfile->name}}</h5>
              </div>
                @commentList(['comments' => $userProfile['comments']]) @endcommentList
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<style>
  .profile-avatar{
    display: inline-block;
    width: 200px;
    height: 200px;
    border-radius: 50%;    
  }
/* 
.profile-nav .user-heading {
    background: #fbc02d;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
} */

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}
</style>

@endsection