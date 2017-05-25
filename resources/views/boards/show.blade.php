@extends('layouts.app')


@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="">
	<a href="/board/{{$board->name}}/newthread">Create New Thread</a>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">{{$board->name}}</div>
	<div class="panel-body">

	@foreach($board->threads as $thread)

	<a href="/board/{{$board->name}}/thread/{{$thread->id}}">{{$thread->title}}</a></br>
	Created By<p>{{$thread->user->name}}</p></br>
	<hr>

	@endforeach	

	</div>
</div>


</div>




@endsection