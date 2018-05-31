@extends('layout')

@section('title')	
	Resume
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/resume.css">
@endsection

@section('content')
		<div class="resume_content">
			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">TECHMOLOGY SUMMARY</h2>
				</div>
				<div class="section_content_skills">
					<div class="skill_column">
						<h3>Experienced with: </h3>
						<ul class="skill_list">
							<li>Java</li>
							<li>Swift</li>
							<li>MATLAB</li>
							<li>HTML</li>
							<li>CSS</li>

						</ul>
					</div>

					<div class="skill_column">
						<h3>Familiar with: </h3>
						<ul class="skill_list">
							<li>C++</li>
							<li>C</li>
							<li>Python</li>
							<li>PHP</li>
							<li>Laravel</li>
							<li>MySQL</li>
							<li>Javascript</li>
							<li>R</li>
						</ul>
					</div>

					<div class="skill_column">
						<h3>Basic knowledge of: </h3>
						<ul class="skill_list">
							<li>Hadoop</li>
							<li>Hive</li>
							<li>Pig</li>
							<li>Node.js</li>
							<li>Socket.io</li>
							<li>Objective-C</li>
						</ul>
					</div>




				</div>
			</div>

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">EDUCATION</h2>
				</div>

				<div class="section_content">
					<div class="experience_block">
						<h3 class="experience_place">Washington University in St. Louis</h3>
						<h4 class="pos_title">Bachelor of Arts: Mathematics and Computer Science</h4>
						<p class="time_period">Graduated May 2017</p>
						<ul class="resume_content_details">
							<li>Minor in Psychology</li>
							<li>Cumulative GPA: 3.68/4.00</li>
							<li>Major GPA: Math: 3.86/4.00 CS: 3.73/4.00</li>
							<li>Dean's List</li>
							<li>College Honors</li>
							<li>Distinction in Mathematics</li>
						</ul>
					</div>

					<div class="experience_block">
						<h3 class="experience_place">University of St Andrews</h3>
						<h4 class="pos_title">Bachelor of Science: Mathematics</h4>
						<p class="time_period">Transferred May 2014</p>
						<ul class="resume_content_details">
							<li>Cumulative GPA: 18.5/20.0</li>
							<li>Dean's List</li>
						</ul>
					</div>
				</div>

			</div>

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">PROFESSIONAL EXPERIENCE</h2>
				</div>
				<div class="section_content">
					<div class="experience_block">
						<h3 class="experience_place">Fast Solutions</h3>
						<h4 class="pos_title">Software Developer</h4>
						<p class="time_period">September 2017 - Current</p>
						<ul class="resume_content_details">
							<li>Redesign a search engine for MEDLINE database using PubMed API (E-utilities).</li>
							<li>Develop and implement new journal impact measuring system.</li>
						</ul>
					</div>
					<div class="experience_block">
						<h3 class="experience_place">Washington University in St. Louis</h3>
						<h4 class="pos_title">Teaching Assistant for CSE132 Computer Science II</h4>
						<p class="time_period">August 2016 - December 2016</p>
						<ul class="resume_content_details">
							<li>Mentored students on good software development practices.</li>
							<li>Assisted instructor in evaluating projects and grading exams.</li>
						</ul>
					</div>
					<div class="experience_block">
						<h3 class="experience_place">Washington University in St. Louis</h3>
						<h4 class="pos_title">Curriculum Development Intern</h4>
						<p class="time_period">June 2016 - August 2016</p>
						<ul class="resume_content_details">
							<li>Designed and developed course material for the basic operation of computers, machine language, intermachine communication and protocol design.</li>
							<li>Created and sample coded Arduino, Java and Assembly project assignments.</li>
						</ul>
					</div>

				</div>
			</div>

			<div class="big_sec">
				<div class= "big_title">
					<h2 class="big_title">VOLUNTEER EXPERIENCE</h2>
				</div>
				<div class="section_content">
					<div class="experience_block">
						<h3 class="experience_place">LauchCode</h3>
						<h4 class="pos_title">Technical Mentor</h4>
						<p class="time_period">January 2017 - May 2017</p>
						<ul class="resume_content_details">
							<li>Spent at minimum five hours per week helping students improve python and web development skills.</li>
						</ul>
					</div>
				</div>
			</div>

@endsection