<header>
	<a href="{{ route('overzicht') }}" class="backButton">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
		overzicht</a>
	<h1 class="logo">
		<span>GAME</span>
		<span>changing</span>
		<i>toevoegingen aan bestaande spelen</i>
	</h1>
	<button id="mute"><img src="{{ asset('/img/audio-aan.svg') }}" alt="geluid aan"></button>
</header>
<main>
	<div class="text-box">
		<span id="countDown" data-min="{{ $min }}" data-max="{{ $max }}">{{ $start }}</span>
		<button id="start">start de tijd</button>
		<button id="won" class="var-sub">gewonnen</button>

		<p>Start het echte spel te spelen</p>

		@if($categories)
			<div class="legend">
				@foreach($categories as $category)
					<div class="legend-item">
						<div class="key var-{{ $category->name }}"></div><span class="description">{{ $category->displayName }}</span>
					</div>
				@endforeach
			</div>
		@endif
	</div>

	<div id="win">
		<form action="{{ route('add_card',['game'=>$game->id]) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<label for="suggestion">Heb je zelf een leuke regel om toe te voegen?</label>
			<input name="suggestion" id="suggestion">
			<input type="submit" value="stel voor">
		</form>
	</div>
	<div class="card">
		<dialog>
			<h2>Speel verder</h2>
			<figure>
				<figcaption>Speel rustig verder. En geniet van het originele spel.</figcaption>
				<h1 class="logo var-card">
					<span>GAME</span>
					<span>changing</span>
				</h1>
			</figure>
		</dialog>
		<button id="read">volgende speler</button>
	</div>
</main>