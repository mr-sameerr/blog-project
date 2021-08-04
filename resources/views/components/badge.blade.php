@if(!(isset($show)) || $show)
	<span class="badge badge-{{$type ?? 'success'}}" style="font-size: medium;">
		{{$slot}}
	</span>
@endif