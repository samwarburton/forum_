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
	<form>
		<textarea class="form-control"></textarea> </br>
		<input type="submit" class="btn btn-success" name="">
	</form>
	</div>
</div>




</div>




@endsection