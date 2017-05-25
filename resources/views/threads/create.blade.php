@extends('layouts.app')


@section('content')

<div class="container">


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">New Thread</div>
	<div class="panel-body">
	<form method="post">
		{{csrf_field()}}
		<input type="text" name="title" class="form-control" placeholder="Thread Title"></br>
		<textarea type="text" rows="5" name="body" class="form-control" placeholder="Enter text here..."></textarea></br>
		<input type="submit" value="Create New Thread" class="btn btn-default">
	</form>
	</div>
	</div>
</div>


</div>


@endsection


