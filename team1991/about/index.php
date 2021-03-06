<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="theme-color" content="#FF9800">
	<title>Team 1991</title>
	
	<!-- Materialize Main styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	
	<!-- Menu -->
	<link rel="stylesheet" href="../assets/menu/menu.min.css">
</head>

<body>
	<noscript id="deferred-styles">
		<!-- Material Icons -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
		
		<!-- Custom styles -->
		<link rel="stylesheet" type="text/css" href="../assets/application.min.css"/>
	</noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
	
	<header class="menu z-depth-1" style="display: block;">
		<div class="center-column">
			<div class="header-items">
				<a class="logo-region" href="/">
					<div class="logotype"></div>
				</a>
				<div class="nav-items">
					<a class="nav-link" href="/"><span>Home</span></a>
					<a class="nav-link" href="/about/"><span>About</span></a>
					<a class="nav-link" href="/photos/"><span>Photos</span></a>
					<a class="nav-link" href="/awards/"><span>Awards</span></a>
					<a class="nav-link" href="/first/"><span><i>F.I.R.S.T.</i></span></a>
					<a class="nav-link" href="/sponsors/"><span>Sponsors</span></a>
				</div>

				<div class="hamburger">
					<div class="dash a"></div>
					<div class="dash b"></div>
					<div class="dash c"></div>
				</div>
			</div>
		</div>
		<div class="dropdown-menu-wrapper count6">
			<div class="dropdown-menu">
				<a class="nav-link" href="/">Home</a>
				<a class="nav-link" href="/about/">About</a>
				<a class="nav-link" href="/photos/">Photos</a>
				<a class="nav-link" href="/awards/">Awards</a>
				<a class="nav-link" href="/first/"><i>F.I.R.S.T.</i></a>
				<a class="nav-link" href="/sponsors/">Sponsors</a>
			</div>
		</div>
	</header>
	<div class="header-space"></div>
	
	<main>
		<div class="section">
			<div class="container">
				<!-- Team -->
				<div class="col m12">
					<div class="card">
						<div class="card-content header-content">
							<span class="card-title"><h1>Team 1991</h1></span>
						</div>
					</div>
				</div>
				
				<!-- About -->
				<div class="col m12">
					<div class="card">
						<div class="card-panel light-blue lighten-4">
							<div class="header-content">
								<span class="card-title"><h4>About Us</h4></span>
							</div>
							<div class="card-content">
								Team 1991, the Dragons, is a student run high school team which was founded in 2007 by a group of students, teachers and mentors who wanted to represent their school's engineering focus in a competitive environment.
								<br><br>
								Participation in the team gives students an opportunity to learn about engineering and technology through hands on experience. Since the team operates like a business, students acquire many professional skills, such as managing a budget, making presentations and planning our build season. As an extracurricular program, the team allows students to apply concepts learned in school as well as develop new skills thanks to various workshops taught by our mentors. In the past years, the students were able to take advantage of the SolidWorks, LabView, Welding and Electronics classes taught by our mentors.
								<br><br>
								Each year, the team participates in the <i>F.I.R.S.T.</i> Robotics Competition which <i>F.I.R.S.T.</i> calls as the "Varsity Sport for the Mind&trade;". The teams are given only six weeks to design, construct and program a robot which will compete against other teams in regional and national events. This closely mimics the real life challenges engineers face when working on the projects.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- About -->
		
		<div class="parallax-container">
			<div class="parallax"><img src="../assets/images/first/robots.jpg"></div>
		</div>
		
		<!-- Robots -->
		<div class="section orange">
			<div class="container">
				<div class="card large">
					<div class="card-image feature-img waves-effect waves-block waves-light" style="height:300px">
						<img class="activator" src="../assets/images/first/robots.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Robots<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-action">
						<a href="/robots/"><span class="orange-text text-accent-4">View Robots</span></a>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Robots<i class="material-icons right">close</i></span>
						<p>Our past creations.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="parallax-container">
			<div class="parallax"><img src="../assets/images/feature/photos.jpg"></div>
		</div>
		
		<!-- Awards -->
		<div class="section white">
			<div class="container">
				<div class="card large">
					<div class="card-image feature-img waves-effect waves-block waves-light" style="height:300px">
						<img class="activator" src="../assets/images/feature/awards.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Awards<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-action">
						<a href="/awards/"><span class="orange-text text-accent-4">View Awards</span></a>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Awards<i class="material-icons right">close</i></span>
						<p>See what our team has accomplished in the past years.</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer class="page-footer grey lighten-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="grey-text darken-1">Team 1991</h5>
					<p class="grey-text">FRC Team 1991 The Dragons</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="grey-text darken-1">Links</h5>
					<ul>
						<li><a class="grey-text" href="https://www.github.com/patkub/team1991-website/" target="_blank"><i class="fa fa-github left"></i>Github</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="footer-copyright">
			<div class="container black-text">
				&copy; <?php echo date("Y") ?> <a class="black-text" href="http://www.antuple.net/" target="_blank">Antuple</a>
				<a class="black-text right">Patrick Kubiak</a>
			</div>
		</div>
	</footer>
	
	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

	<!-- Materialize compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

	<!-- Menu -->
	<script src="../assets/menu/menu.min.js"></script>

	<!-- Parallax -->
	<script>
	$(document).ready(function(){
		$('.parallax').parallax();
	});
	</script>
</body>
</html>
