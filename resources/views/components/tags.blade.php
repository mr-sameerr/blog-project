@foreach ($tags as $tag)
    <a href="{{route('post-tags.index', $tag->id)}}" class="badge badge-success">{{$tag->name}}</a>
@endforeach