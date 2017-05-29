@extends('layouts.app')


@section('content')


<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-default">
		<div class="panel-body">
		@foreach($users as $user)

		<p>{{$user->name}}</p>
		<p>{{$user->role}}</p>
		<a href="/admin/users/{{$user->id}}/edit">Edit User</a>

		@endforeach
		</div>
	</div>

</div>


@endsection