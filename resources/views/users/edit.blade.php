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
			  <option value="user">User</option>
			  <option value="moderator">Moderator</option>
			</select></br>

			<label>Account status</label>
			<select class="form-control" name="status">
			  <option value="active">Active</option>
			  <option value="banned">Banned</option>
			</select></br>
			<input type="submit" class="btn btn-default" value="Update User">
		</form>
		</div>
	</div>

</div>


@endsection