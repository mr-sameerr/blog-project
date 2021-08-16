<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}
</style>

<p>
	Yo Yo {{ $comment->commentable->user->name}} Motha fu#ker.
</p>
<p>
	Stranger has commented on post <a href="{{route('posts.show', $comment->commentable->id)}}">
		{{$comment->commentable->title}}
	</a>
</p>
<p>
	
	<img src="{{ public_path() . '/' .$message->embed($comment->user->image->url()) }}"/>
	<a href="{{route('user.show', $comment->user->id)}}">{{$comment->user->name}}</>
</p>
<p>
	"{{$comment->description}}"
</p>

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