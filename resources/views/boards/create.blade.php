@extends('layouts.app')


@section('content')

<div class="container">


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">Create New Board</div>
	<div class="panel-body">
	<form method="post">
		{{csrf_field()}}
		<input type="text" name="name" class="form-control" placeholder="Board Name"></br>
		<textarea type="text" rows="5" name="description" class="form-control" placeholder="Description"></textarea></br>
		<input type="submit" value="Create New Board" class="btn btn-default">
	</form>
	</div>
	</div>
</div>


</div>


@endsection