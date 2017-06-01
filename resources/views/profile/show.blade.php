@extends('layouts.app')


@section('content')
<div class="container">

<img src="{{$user->avatar}}">
<h1>{{$user->name}}</h1>
<p>Number of Posts: {{$user->comments->count()}}</p>
<p>Joined: {{$user->created_at}}</p>

@if(Auth::id() == $user->id)
<a href="">Edit your profile</a></br>
@endif

@if( Auth::id() != $user->id)
<a href="">Send Message</a></br>
@endif
<a href="">View all posts</a></br>
<a href="">View all threads</a>
</div>
@endsection