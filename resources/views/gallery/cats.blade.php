@extends('layout')

@section('title')	
	Cats
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/gallery.css">
@endsection

@section('content')

	<div class="background">
		<h1 class="gallery_title">Cats</h1>
		<div class="gallery_lists">
			<a class="gallery_link" href="/gallery/cats/simba">
				<div class="gallery_list_background">
				</div>
				<div class="gallery_list_text">Simba</div>
			</a>

			<a class="gallery_link" href="/gallery/cats/oreo">
				<div class="gallery_list_background">
				</div>
				<div class="gallery_list_text">Oreo</div>
			</a>

		</div>	

	</div>

@endsection