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
			<img src="/assets/gallery/IMG_0908.JPG">
			<img src="/assets/gallery/IMG_0903.JPG">
			<img src="/assets/gallery/IMG_0906.JPG">
			<img src="/assets/gallery/IMG_0907.JPG">
			<img src="/assets/gallery/IMG_0920.JPG">
			<img src="/assets/gallery/IMG_0913.JPG">
			<img src="/assets/gallery/IMG_0895.JPG">
			<img src="/assets/gallery/IMG_0902.JPG">
			<img src="/assets/gallery/IMG_0912.JPG">
			<img src="/assets/gallery/IMG_0911.JPG">
			<img src="/assets/gallery/IMG_0908.JPG">
			<img src="/assets/gallery/IMG_0908.JPG">
			<img src="/assets/gallery/IMG_0908.JPG">
			<img src="/assets/gallery/IMG_0908.JPG">
		</div>

	</div>

@endsection