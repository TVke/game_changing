@extends('layout')
@section('content')
	<form action="{{ route('search') }}" method="post">
		{{ csrf_field() }}
		<input name="search" placeholder="memorie">
		<input type="submit" value="zoek">
	</form>
	<h1>
		<p>GAME</p>
		<span>changing</span>
	</h1>
	<ul>
		@foreach($games as $game)
			<li><a href="{{ route('play', ['game'=>$game->name]) }}">{{ $game->name }}</a><br>{{ $game->discription }}</li>
			@endforeach
	</ul>
	<footer>
		&copy; GAMEchanging 2017
	</footer>
@endsection