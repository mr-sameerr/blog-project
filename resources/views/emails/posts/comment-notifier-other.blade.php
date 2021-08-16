@component('mail::message')
# Comment was posted on post you're watching.

{{-- Hi, {{$user->name}} --}}

{{ucwords($comment['commentable']->name)}} posted comment on your blog post.

@component('mail::button', ['url' => route('posts.show', $comment->commentable->id)])
View Post here
@endcomponent

@component('mail::button', ['url' => route('user.show', $comment->commentable->user->id)])
Visit {{$comment['commentable']->name}} profile
@endcomponent

@component('mail::panel')
	{{$comment->description}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent