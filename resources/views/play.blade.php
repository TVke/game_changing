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
	<p>Begin je echte spel te spelen. Je krijgt een melding als er </p>
	<span id="countDown" data-min="{{ $min }}" data-max="{{ $max }}" class="hidden">{{ $start }}</span>
	<button id="won">gewonnen</button>
	<button id="pause" class="var-sub">pipi pauze</button>

	<div class="card">
		<dialog>
			<h2>Speel verder</h2>
			<figure>
				<figcaption>Speel rustig verder. En geniet van het originele spel.</figcaption>
				<img src="{{ asset('/img/shuffle.png') }}" alt="">
			</figure>
			{{--<p>Speel rustig verder. En geniet van het originele spel.</p>--}}
		</dialog>
		<button id="read">doorgegeven</button>
	</div>
	<audio id="notification" src="{{ asset('/audio/notification.mp3') }}"></audio>
</main>