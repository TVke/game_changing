@extends('layout')
@section('content')
	<a href="{{ route('overzicht') }}"> < Overzicht</a>

	<h1>
		<p>GAME</p>
		<span>changing</span>
	</h1>

	<span id="countDown" data-max="120">120</span>

	<button>Pauze</button>

@endsection