@extends('layouts.app')


@section('content')

@if (session('status'))
    <div class="alert alert-danger text-center">
        {{ session('status') }}
    </div>
@endif

<div class="container">


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">Boards</div>
	<div class="panel-body">
	@foreach($boards as $board)

	<a href="/board/{{$board->name}}">{{$board->name}}</a>
	<p>{{$board->description}}</p>
	@endforeach
	</div>
</div>


</div>










@endsection