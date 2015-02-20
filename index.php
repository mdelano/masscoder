<!doctype html>
<html class="no-js" lang="en" ng-app="masscoderApp">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Mike Delano - Programmer Web Developer</title>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Exo+2:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/style.css" />

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular-animate.min.js"></script>
		<script src="js/controllers/masscoder_controller.js"></script>
		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body ng-controller="MasscoderController">
		<div class="row">
			<div class="large-3 columns">

				<!-- Left Nav Start -->
				<div class="fixed-left-nav lil-bit-o-padding">
					<h2>{{masscoder.profile.name}}<small> {{masscoder.profile.whatIDo}}</small></h2>
					<img data-interchange="[img/mypic-med.JPG, (default)], [img/mypic-large.JPG, (large)], [img/mypic-small.JPG, (small)]"> 
					
					<div class="my-blurb">
						<p>{{masscoder.profile.blurb}}</p>
					</div>

					<ul class="no-bullet">
						<li><a href="#aboutme">About Me</a></li>
						<li class="tree-menu"><a href="#resume">Work History</a></li>
						<li class="tree-menu"><a href="#learning">Learning</a></li>
						<li class="tree-menu"><a href="#this">This</a></li>
					</ul>

					<!-- Social Links Start -->

					<div class="social">
						<ul class="inline-list">
							<li><a target="_blank" href="http://www.linkedin.com/pub/michael-delano/b/812/2?trk=shareTw"><img data-interchange="[img/glyph/linkedin-large.png, (default)], [img/glyph/linkedin-large.png, (large)], [img/glyph/linkedin-medium.png, (small)]"> </a></li>
							<li><a target="_blank" href="https://www.facebook.com/michaelbdelano"><img data-interchange="[img/glyph/facebook-large.png, (default)], [img/glyph/facebook-large.png, (large)], [img/glyph/facebook-medium.png, (small)]"></a></li>
							<li><a target="_blank" href="https://twitter.com/mbdelano"><img data-interchange="[img/glyph/twitter-large.png, (default)], [img/glyph/twitter-large.png, (large)], [img/glyph/twitter-medium.png, (small)]"></a></li>
							<li><a target="_blank" href="https://plus.google.com/u/0/109785372437718516628/posts"><img data-interchange="[img/glyph/google_plus-large.png, (default)], [img/glyph/google_plus-large.png, (large)], [img/glyph/google_plus-medium.png, (small)]"></a></li>
						</ul>
					</div>

					<!-- Social Links End -->

				</div>

				<!-- Left Nav End -->
			</div>	
			
			<!-- Main Content Start -->
			<div class="large-9 columns main-content">

				<!-- Hello Start -->
				<div class="section-divider">
					<div class="content">
						<div class="hello"><a href="#aboutme"><h1>Hello :)</h1>
						<p>I'm Mike. There's all kinds of stuff about me below.</p></a></div>
					</div>
				</div>
				<!-- Hello End -->

				<div class="section-divider"></div>

				<!-- About Me Start -->
				<a id="aboutme"></a>
				<div class="lil-bit-o-padding aboutme">
					<h1>{{masscoder.aboutMe.title}}</h1>
					<div class="lil-bit-o-padding" ng-repeat="category in masscoder.aboutMe.categories">
						<h3>{{category.title}}</h3>
						<p>{{category.text}}</p>
						<div ng-repeat="subcategory in category.categories">
							<h5>{{subcategory.title}}</h5>
							<p>{{subcategory.text}}</p>
						</div>
					</div>
				</div>
				<!-- About Me End -->

				<div class="section-divider big-boy">
					<img data-interchange="[img/bird-2.png, (default)], [img/bird-2.png, (large)], [img/bird-2.png, (small)]">
				</div>

				<!-- Resume Start -->
				<a id="resume"></a>
				<div class="lil-bit-o-padding resume">
					<h1>Work History</h1>
					<div ng-repeat="job in masscoder.workHistory.jobs">
						<div class="job lil-bit-o-padding" ng-click=toggleVisibility(job.company.name)>
							<span class="moreless" ng-show="isVisible(job.company.name)">less</span>
							<span class="moreless" ng-hide="isVisible(job.company.name)">more</span>
							<h2>{{job.title}}</h2>
							<h3>{{job.company.name}}<small> {{job.started}} - {{job.left}}</small></h3>
							<div class="job-details animate-show" ng-show="isVisible(job.company.name)">
								<div class="company-profile dont-squish-me">
									<h3>A little about {{job.company.name}}:</h3>
									<p>{{job.company.about}}</p>
								</div>
								<div>
									<h3>Stack:</h3>
									<p>{{job.stack}}</p>
								</div>
								<div>
									<h3>What I Worked On:</h3>
									<div ng-repeat="detail in job.details"><p>{{detail}}</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Resume End -->

				<div class="section-divider">
					<img data-interchange="[img/bird-2.png, (default)], [img/bird-2.png, (large)], [img/bird-2.png, (small)]">
				</div>

				<!-- Learning Start -->
				<a id="learning"></a>
				<div class="lil-bit-o-padding">
					<h1>Learning</h1>
					<div class="lil-bit-o-padding">
						<h2>Formal Education</h2>
						<div ng-repeat="school in masscoder.education.schools">
							<p><h3>{{school.name}}</h3><h3><small>{{school.whatIGotFromIt}}</small></h3></p>
						</div>
						<h2>Practical Education</h2>
						<div ng-repeat="detail in masscoder.education.practicalLeanring.details">
							<p>{{detail}}}</p>
						</div>
						<div ng-repeat="personWhoSchooledMe in masscoder.education.practicalLearning.peopleWhoSchooledMe">
							<p><h3>{{personWhoSchooledMe.name}}</h3><h3><small>{{personWhoSchooledMe.lesson}}</small></h3></p>
						</div>
					</div>
				</div>
				<!-- Learning End -->

				<div class="section-divider big-boy">
					<img data-interchange="[img/bird-2.png, (default)], [img/bird-2.png, (large)], [img/bird-2.png, (small)]">
				</div>

				<!-- This Start-->
				<a id="this"></a>
				<div class="lil-bit-o-padding">
					<h1>This</h1>
					<div class="lil-bit-o-padding">
						<h5>This site was built using</h5>
						<div class="lil-bit-o-padding">
							<h3><a href="http://foundation.zurb.com/">Foudation</a></h3>
						</div>
						<div class="lil-bit-o-padding">
							<h3><a href="http://angularjs.org/">AngularJS</a></h3>
						</div>
						<div class="lil-bit-o-padding">
							<h3>Love</h3>
						</div>
					</div>
				</div>
				<!-- This End -->

				<div class="section-divider big-boy">
					<img data-interchange="[img/bird-2.png, (default)], [img/bird-2.png, (large)], [img/bird-2.png, (small)]">
				</div>

			</div>
			<!-- Main Content End -->
		</div>
			

	    <script src="js/vendor/jquery.js"></script>
	    <script src="js/foundation.min.js"></script>
	    <script>
	      	$(document).foundation();

			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
	    </script>

	</body>
</html>