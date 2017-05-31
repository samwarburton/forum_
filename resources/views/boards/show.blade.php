@extends('layouts.app')


@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="">

	</div>
	<div class="panel panel-default">
	<div class="panel-heading">{{$board->name}} <a class="pull-right" href="/board/{{$board->name}}/newthread">	 <span class="glyphicon glyphicon-plus
"></span> Create New Thread</a></div>
	<div class="panel-body">



	@foreach($board->threads as $thread)
	<div class="row custom">

	<div class="col-md-6">
	<span class="glyphicon glyphicon-file
"></span>
	<a href="/board/{{$board->name}}/thread/{{$thread->id}}">{{$thread->title}}</a>
	</div>

	<div class="col-md-3">
	<p>Replies: {{$thread->comments->count()}}</p>
	</div>
	<div class="col-md-3">
	Created: {{$thread->created_at}} By <a href="/user/{{$thread->user->name}}">{{$thread->user->name}}</a>	</div>

	</div>
	@endforeach	





	</div>
</div>


</div>




@endsection