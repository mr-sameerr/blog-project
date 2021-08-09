@forelse($comments as $comment)
	<div class="card p-3 mt-2">
		<div class="d-flex justify-content-between align-items-center">
		<div class="user d-flex flex-row align-items-center"> 
			<img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
			<span><small class="font-weight-bold text-primary">Don Jon</small>
					<p><small class="font-weight-bold">{{$comment->description}}</small></p>
				</span>
			</div>
			<small>{{$comment->created_at->diffForHumans()}}</small>
		</div>
		<div class="action d-flex justify-content-between mt-2 align-items-center">
			<div class="reply px-4">
				<small>Remove</small><span class="dots"></span>
				<small>Reply</small> <span class="dots"></span>
			</div>
		</div>
	</div>
@empty
	<p>No Comments Here..!!</p>
@endforelse