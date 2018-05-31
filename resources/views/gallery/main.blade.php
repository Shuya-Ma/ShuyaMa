@extends('layout')

@section('title')	
	Gallery
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/gallery.css">
@endsection

@section('content')

	<div class="background">
		<h1 class="gallery_title">Album</h1>
		<div class="gallery_lists">
			<a class="gallery_link" href="/gallery/cats">
				<div class="gallery_list_background">
				</div>
				<div class="gallery_list_text">I have 2 cats</div>
			</a>

			<a class="gallery_link" href="/gallery/traveling">
				<div class="gallery_list_background">
				</div>
				<div class="gallery_list_text">I love traveling</div>
			</a>

		</div>	

	</div>

@endsection