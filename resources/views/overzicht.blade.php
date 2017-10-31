@extends('layout')
@section('content')
	<div id="oldPage">
		@if(!isset($popGame))
			<div id="overlay">
				<figure class="arrow-group">
					<img class="arrow var-top" src="{{ asset('/img/arrow-up.png') }}" alt="pijl naar zoekbalk">
					<figcaption class="arrow-description var-top">Hier kan je een spel zoeken</figcaption>
				</figure>
				<figure class="arrow-group var-right">
					<figcaption class="arrow-description var-right">Hier kan je een spel beginnen spelen</figcaption>
					<img class="arrow var-right" src="{{ asset('/img/arrow-right.png') }}" alt="pijl naar speelknop">
				</figure>
			</div>
		@endif
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
		@if(empty($games))
			<ul>
				@if(isset($popGame))
					<li>
						<a href="{{ route('overzicht') }}" data-href="{{ route('play', ['game'=>$popGame->name]) }}">
							<h2>{{ $popGame->name }}</h2>
							<button>Speel</button>
						</a>
					</li>
				@endif
				@foreach($games as $game)
					<li>
						<a href="{{ route('overzicht') }}" data-href="{{ route('play', ['game'=>$game->name]) }}">
							<h2>{{ $game->name }}</h2>
							<button>Speel</button>
						</a>
					</li>
				@endforeach
			</ul>
			@else
			<p>We vonden niet het spel dat je zocht. Probeer iets anders te zoeken. </p>
		@endif
		<form class="var-suggestion" action="{{ route('suggest') }}" method="post">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@if(Session::has('message'))
				<label for="suggestion">{{ Session::get('message') }}</label>
			@else
				<label for="suggestion">Zit uw favoriete spel er niet bij?</label>
			@endif

			<input name="suggestion" id="suggestion" placeholder="" value="{{ old("suggestion") }}">
			<input type="submit" value="vraag aan">

			@if($errors->has('suggestion'))
				<p class="error">{{ $errors->first('suggestion')}}</p>
			@endif
		</form>
		<footer>
			&copy; GAMEchanging 2017
		</footer>
	</div>
	<div id="nextPage" class="hide"></div>
@endsection