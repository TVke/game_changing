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
		@foreach($cards as $card)
			<li>{{ $card->title }}</li>
			@endforeach
	</ul>
	<footer>
		&copy; GAMEchanging 2017
	</footer>
@endsection