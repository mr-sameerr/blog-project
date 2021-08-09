@auth
  <form action="{{$route}}" method="POST">
    @csrf()
    <div class="form-group"><br>
      <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-md btn-block">Add a Comment</button>
  </form>
@else
  <a href="{{route('login')}}"> Sign in </a>to post comment!
@endauth