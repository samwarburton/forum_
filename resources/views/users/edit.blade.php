@extends('layouts.app')


@section('content')


<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-default">
		<div class="panel-body">
		<h1>{{$user->name}}</h1>
		<form method="post">
			{{csrf_field()}}
			<label>Role:</label>
			<select class="form-control" name="role">
			  <option value="volvo">User</option>
			  <option value="saab">Moderator</option>
			</select></br>

			<label>Account status</label>
			<select class="form-control" name="status">
			  <option value="volvo">Active</option>
			  <option value="saab">Banned</option>
			</select></br>
			<input type="submit" class="btn btn-default" value="Update User">
		</form>
		</div>
	</div>

</div>


@endsection