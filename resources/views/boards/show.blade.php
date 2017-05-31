@extends('layouts.app')


@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="">

	</div>
	<div class="panel panel-default">
	<div class="panel-heading"><b>{{$board->name}}</b> <a class="pull-right" href="/board/{{$board->name}}/newthread">Create New Thread</a></div>
	<div class="panel-body">


<table class="table">
<h4>Threads</h4>
<table class="table">
	<thead>
		<tr>
			<th>
			Title
			</th>
			<th>
			Author
			</th>
			<th>
			Created At 
			</th>
			<th>
				Replies
			</th>
		</tr>
	</thead>

	<tbody>
	@foreach($board->threads as $thread)
		<tr>
			<td>
			<a href="">{{$thread->title}}</a>
			</td>
			<td>
				{{$thread->user->name}}
			</td>
			<td>
				{{$thread->created_at->format('d m y')}}
			</td>
			<td>
				{{$thread->comments->count()}}
			</td>
		</tr>

	@endforeach	
	</tbody>
</table>







	</div>
</div>


</div>




@endsection