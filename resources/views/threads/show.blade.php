@extends('layouts.app')


@section('content')
<div class="col-md-10 col-md-offset-1">

	<div class="panel panel-default">
	<div class="panel-heading">Created {{$thread->created_at->format(' h:i a, D M y')}}
	@if(Auth::id() == $thread->user_id)
	<a href="{{$thread->id}}/edit" class="pull-right">Edit</a>
	@endif
	</div>
	<div class="panel-body">
	<div class="col-md-2">
	<img class="img img-responsive" src="https://freeiconshop.com/wp-content/uploads/edd/person-flat.png">
	<h3><a href="">{{$thread->user->name}}</a></h3>
	<p>Joined: {{$thread->user->created_at->format('d M y')}}</p>
	</div>
	<div class="col-md-9 col-md-offset-1">
	<p>{{$thread->body}}</p>
	</div>
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
	<div class="panel-heading">Posted {{$comment->created_at->format(' h:i a, D M y')}}
	</div>
	<div class="panel-body">
	<div class="col-md-2">
	<img class="img img-responsive" src="https://freeiconshop.com/wp-content/uploads/edd/person-flat.png">
	<h3><a href="">{{$comment->user->name}}</a></h3>
	<p>Joined: {{$comment->user->created_at->format('d M y')}}</p>
	</div>

	<div class="col-md-9 col-md-offset-1">
	
	<p>{!! $comment->body !!}</p>



	</div>
	</div>
	 <div class="panel-footer">Report
	 	@if($comment->user->id == Auth::id())

	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>


	@endif
	 </div>
</div>



@endforeach



</div>




@endsection