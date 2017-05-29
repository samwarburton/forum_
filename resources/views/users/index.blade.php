@extends('layouts.app')


@section('content')


<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-default">
		<div class="panel-body">
		@foreach($users as $user)

		<p>{{$user->name}}</p>
		<p>{{$user->threads->count()}}</p>
		
		@endforeach
		</div>
	</div>

</div>


@endsection