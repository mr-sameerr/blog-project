@foreach ($tags as $tag)
    <a href="{{route('post-tags.index', $tag->id)}}" class="badge badge-primary">{{ucwords($tag->name)}}</a>
@endforeach