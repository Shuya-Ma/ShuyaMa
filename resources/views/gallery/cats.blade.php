@extends('layout')

@section('title')	
	Cats
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/gallery.css">
@endsection

@section('content')

	<div class="background">
		<h1 class="gallery_title">Meet my two cats</h1>
		<h4 class="gallery_subtitle">They are Simba and Oreo!</h5>
		<div class="gallery_lists">
			<a class="gallery_link" href="/gallery/cats/simba">
				<div class="gallery_list" id="gallery_simba">
					<div class="gallery_list_overlay">
					</div>
					<div class="gallery_list_text">Simba</div>
				</div>
			</a>

			<a class="gallery_link" href="/gallery/cats/oreo">
				<div class="gallery_list" id="gallery_oreo">
					<div class="gallery_list_overlay">
					</div>
					<div class="gallery_list_text">Oreo</div>
				</div>
			</a>
		</div>	
		<div class="photos">
			<img src="/assets/gallery/IMG_2049.JPG">
			<img src="/assets/gallery/S&O_window_1.JPG">
			<img src="/assets/gallery/S&O_window_2.JPG">
			<img src="/assets/gallery/IMG_2086.JPG">
		</div>

	</div>

@endsection