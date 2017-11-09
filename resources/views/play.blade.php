<header>
	<a href="{{ route('overzicht') }}" class="backButton">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
		overzicht</a>
	<h1 class="logo">
		<span>GAME</span>
		<span>changing</span>
		<i>Jij hebt het spel, wij de uitbreiding</i>
	</h1>
	<button id="mute"><img src="{{ asset('/img/audio-aan.svg') }}" alt="geluid aan"></button>
</header>
<main>
	<div class="text-box">
		<span id="countDown" data-min="{{ $min }}" data-max="{{ $max }}">{{ $start }}</span>
		<button id="start" class="button">start de klok</button>
		<a href="{{ route('win',['game'=>$game->name]) }}" id="won" class="button var-sub">gewonnen</a>

		<ol class="list var-ordered">
			<li><strong>Bereid alles voor</strong> om {{ strtolower($game->name) }} te spelen</li>
			<li>druk op "start de klok" en <strong>begin te spelen</strong></li>
			<li>er verschijnt een kaart voor speler 1</li>
			<li>druk op volgende en <strong>speel verder met de regel</strong></li>
			<li>herhaal stap 3-4 tot het einde</li>
			<li>u won? druk op “gewonnen”</li>
		</ol>

		@if($categories)
			<section class="legend">
				<h2 class="heading-2">kaarttypes</h2>
				@foreach($categories as $category)
					<div class="legend-item">
						<div class="key var-{{ $category->name }}"></div><span class="description">{{ $category->displayName }}</span>
					</div>
				@endforeach
			</section>
		@endif
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
				<img src="" alt="">
			</figure>
		</dialog>
		<button id="read" class="button var-read">volgende speler</button>
	</div>
</main>