@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('user.update', $user->id)}}">
        

    </form>
    
@endsection