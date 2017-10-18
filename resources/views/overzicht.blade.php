@extends('layout')
@section('content')
	<div id="oldPage">
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
		<li>
			<a href="{{ route('overzicht') }}" data-href="{{ route('play', ['game'=>$popGame->name]) }}">
				<h2>{{ $popGame->name }}</h2>
				<button>Speel</button>
			</a>
		</li>
		@foreach($games as $game)
			<li>
				<a href="{{ route('overzicht') }}" data-href="{{ route('play', ['game'=>$game->name]) }}">
					<h2>{{ $game->name }}</h2>
					<button>Speel</button>
				</a>
			</li>
		@endforeach
	</ul>
	<form class="var-suggestion" action="{{ route('suggest') }}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		@if($errors->has('suggestion'))
            <label>{{ $errors->first('suggestion')}}</label>
        @endif

		@if(Session::has('message'))
			<label for="suggestion">{{ Session::get('message') }}</label>
		@else
			<label for="suggestion">Zit uw favoriete spel er niet bij?</label>
		@endif

		<input name="suggestion" id="suggestion" placeholder="" value="{{ old("suggestion") }}">
		<input type="submit" value="vraag aan">
	</form>
	<footer>
		&copy; GAMEchanging 2017
	</footer>
	</div>
	<div id="nextPage" class="hide"></div>
@endsection