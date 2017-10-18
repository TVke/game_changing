@extends('layout')
@section('content')

	<form action="{{ route('search') }}" method="post">
		{{ csrf_field() }}
		<input name="search" placeholder="zoek een spel" value="{{ request('search') }}">
		<input type="submit" value="zoek">
	</form>
	<h1>
		<a href="{{ route('overzicht') }}">
			<p>GAME</p>
			<span>changing</span>
		</a>
	</h1>
	<ul>
		@foreach($games as $game)
			<li>
				<a href="{{ route('overzicht') }}" data-href="{{ route('play', ['game'=>$game->name]) }}">
					<h2>{{ $game->name }}</h2>
					<button>Speel</button>
				</a>
			</li>
		@endforeach
	</ul>
	<form class="var-suggestion" action="{{ route('search') }}" method="post">
		{{ csrf_field() }}
		<label for="suggestion">Zit uw favoriete spel er niet bij?</label>
		<input name="suggestion" id="suggestion" placeholder="" value="{{ old("suggestion") }}">
		<input type="submit" value="vraag aan">
	</form>
	<footer>
		&copy; GAMEchanging 2017
	</footer>
@endsection