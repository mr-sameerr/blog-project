@if(isset($time))
	<span class="text-muted">
		{{empty(trim($slot)) ? 'Added' : $slot }} {{$date->diffForHumans()}} 
		@if(isset($name))
			{{$name}}
		@endif
	</span>
@endif