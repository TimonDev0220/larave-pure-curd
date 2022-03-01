@extends('layout')

@section('content')
<style>
	.uper {
		margin-top: 40px;
	}
</style>
<div class="uper">
	@if(session()->get('success'))
		<div class="alert alert-success">
			{{ session()->get('success')}}
		</div> <br />
	@endif
	<table class="table table-striped">
		<tr>
			<tr>
				<th>ID</th>
				<th>Game Name</th>
				<th>Game Price</th>
				<th colspan="2">Action</th>
			</tr>
		</tr>
		<tbody>
			@foreach($games as $game)
			<tr>
				<td>{{$game->id}}</td>
				<td>{{$game->name}}</td>
				<td>{{$game->price}}</td>
				<td>
					<a href="{{ route('games.edit', $game->id)}}" class="btn btn-primary">Edit</a>
				</td>
				<td>
					<form action="{{route('games.destroy', $game->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection