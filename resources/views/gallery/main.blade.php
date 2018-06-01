@extends('layout')

@section('title')	
	Gallery
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/gallery.css">
@endsection

@section('content')

	<div class="background_main">
		<h1 class="gallery_title">Gallery</h1>
		<h4 class="gallery_subtitle">I am no photographer, but I like to capture memories</h5>
		<div class="gallery_lists">
			<a class="gallery_link" href="/gallery/cats">
				<div class="gallery_list" id="gallery_cats">
					<div class="gallery_list_overlay">

					</div>
					<div class="gallery_list_text">I have 2 cats</div>
				</div>
			</a>

			<a class="gallery_link" href="/gallery/traveling">
				<div class="gallery_list" id="gallery_traveling">
					<div class="gallery_list_overlay">
					</div>
					<div class="gallery_list_text">I love traveling</div>
				</div>
			</a>

		</div>	

	</div>

@endsection