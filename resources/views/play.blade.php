<header>
	<a href="{{ route('overzicht') }}">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
		overzicht</a>
	<h1>
		<p>GAME</p>
		<span>changing</span>
	</h1>
</header>
<main>
	<div class="text-box">

		<p>Begin het spel te spelen. Je krijgt een melding als er een wijziging is. Na elke kaart is het aan de volgende speler.</p>
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
	<span id="countDown" data-min="{{ $min }}" data-max="{{ $max }}" class="hidden">{{ $start }}</span>
	<button id="won">gewonnen</button>
	<button id="pause" class="var-sub">pipi pauze</button>
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
				<img src="{{ asset('/img/placeholder.png') }}" alt="">
			</figure>
		</dialog>
		<button id="read">doorgegeven</button>
	</div>
</main>