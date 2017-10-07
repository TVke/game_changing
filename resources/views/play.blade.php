{{--@extends('layout')--}}
{{--@section('content')--}}
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
	<span id="countDown" data-max="120">120</span>
	<button>pauze</button>

	<dialog>
		<h2>Speel verder</h2>
		<p>Speel rustig verder. En geniet van het originele spel.</p>
	</dialog>
</main>
{{--@endsection--}}