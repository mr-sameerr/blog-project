@if(isset($time))
	<span class="text-muted">
		{{empty(trim($slot)) ? 'Added' : $slot }} {{$date->diffForHumans()}}
		@if(isset($name))
			@if(isset($userId))
				<a href="{{route('user.show', $userId)}}">{{$name}}</a>
			@else
				{{$name}}
			@endif
		@endif
	</span>
@endif