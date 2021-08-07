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
        <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2" style="text-align: center;">
            <div class="card-profile-image" style="margin-top: -44px;">
              <a href="#">
                {{-- <img src="{{asset('/images/person_1.jpg')}}" class="profile-avatar" > --}}
                <img src="{{ $user->image ? $user->image->url() : ''}}" class="profile-avatar" >
              </a>
            </div>
            <div class="mt-4" >
              <div class="card-body">
                <h6>Update Your Avatar</h6>
                <input type="file" class="form-control-file" name="avatar" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-3 text-lg-right">
            <div class="card-profile-actions py-4 mt-lg-0">
              <a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-light mr-4"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                Back</a>
              {{-- <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-default float-right "><i class="fa fa-edit"></i> Edit</a> --}}
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
           
          </div>
        </div>
        <div class="text-center mt-5">
          
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="{{$user->name}}" id="username" placeholder="Username" >
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="{{$user->email}}" id="email" placeholder="Email">
              </div>
            </div>
            <input type="submit" class="btn btn-sm btn-primary" value="Update">
          </div>
        </form>
        <hr><br>
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