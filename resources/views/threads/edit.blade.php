@extends('layouts.app')


@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

	<div class="container">

	<div class="panel panel-default">
	<div class="panel-heading">Edit Post</div>
	<div class="panel-body">
	<form method="POST">
		{{csrf_field()}}
		<input value="{{$thread->title}}" type="text" name="title" class="form-control"></br>
		<textarea class="form-control" name="body" rows="6">{{$thread->body}}</textarea></br>
		<input type="submit" name="" value="Update Thread" class="btn btn-success">
	</form>



	</div>
	</div>


</div>







@endsection