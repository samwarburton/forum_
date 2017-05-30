@extends('layouts.app')


@section('content')
<div class="col-md-8 col-md-offset-2">

	<div class="panel panel-default">
	<div class="panel-heading">{{$thread->title}}</div>
	<div class="panel-body">
	<p>{{$thread->body}}</p>
	</div>
</div>



<div class="panel panel-default">
	<div class="panel-heading">Create Comment</div>
	<div class="panel-body">
	<form method="post">
		{{csrf_field()}}
		<textarea class="form-control" name="body"></textarea> </br>
		<input type="submit" class="btn btn-success" name="">
	</form>
	</div>
</div>

@foreach($thread->comments as $comment)
	
	<div class="panel panel-default">
	<div class="panel-heading">{{$comment->user->name}}</div>
	<div class="panel-body">
	<p>{!! $comment->body !!}</p>
	@if($comment->user->id == Auth::id())

	<p>User can edit this</p>

	@endif
	</div>
</div>



@endforeach



</div>




@endsection