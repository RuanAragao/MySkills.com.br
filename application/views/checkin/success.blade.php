<!DOCTYPE HTML>
<html>
<head>
<title>MySkills.com.br - Daily Checkin App</title>
{{HTML::style('css/bootstrap-responsive.css')}}
{{HTML::style('css/bootstrap-responsive.min.css')}}
{{HTML::style('css/bootstrap.css')}}
{{HTML::style('css/bootstrap.min.css')}}
</head>
<body>
	<div class="row-fluid pagination-centered">
		<div>
			 <h2>Coding with {{$technology}}</h2>
		</div>
		<div>
			{{HTML::image('img/MySkills-155-100.png',  'MySkills logo', array('width' => '125'))}}
		</div>
	</div>
	<div class="row-fluid pagination-centered">
		@if($status=='SUCCESS')
			<div class="alert alert-success">
				<h3>Check in Completed (+1)</h3>
				<p>Life is too short to write bad code!!!</p>
			</div>
		@endif
		@if($status=='ERROR')
			<div class="alert alert-error">
				<h3>Checkin in Completed (+0)</h3>
				<p>Life is too short to write bad code!!!</p>
			</div>
		@endif
		<div>
			{{HTML::image('img/laravel.png',  'Laravel logo', array('width' => '75'))}}
		</div>
		<div>
			<i class="icon-star"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
		</div>
	<div>
</body>
</html>