@extends('layout')

@section('title')	
	Resume
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/resume.css">
@endsection

@section('content')
	<div class="background">
		<div class="resume_content">

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">TECHMOLOGY SUMMARY</h2>
				</div>
				<div class="section_content_tech_sum">

				</div>
			</div>

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">EDUCATION</h2>
				</div>

				<div class="section_content_edu">
					<div class="edu_left">
						<h3 class="school_name">Washington University in St. Louis</h3>
						<p class="degree">Bachelor of Arts: Mathematics</p>
						<p> Second Major in Computer Science and Minor in Psychology</p>
					</div>

					<div class="edu_right">
						<p>

					</div>


				</div>
			</div>

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">PROFESSIONAL EXPERIENCE</h2>
				</div>
				<div class="section_content_work">

				</div>
			</div>

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">VOLUNTEER EXPERIENCE</h2>
				</div>
				<div class="section_content_volunteer">

				</div>
			</div>



		</div>
	</div>
@endsection