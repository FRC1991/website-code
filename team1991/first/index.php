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
		<div class="container">
			
			<div class="col m12">
				<!-- Team -->
				<div class="card">
					<div class="card-content header-content">
						<span class="card-title"><h1>Team 1991</h1></span>
					</div>
				</div>
				
				<!-- FIRST -->
				<div class="card">
					<div class="card light-blue lighten-4">
						<div class="card-image waves-effect waves-block waves-light">
							<a href="http://www.firstinspires.org/" target="_blank"><img src="../assets/images/feature/first.jpg"></a>
						</div>
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4><i>F.I.R.S.T.</i></h4></span>
							</div>
							Dean Kamen founded <i>F.I.R.S.T.</i> in 1989 to give young people the opportunity to be leaders in science and technology.
							<br><br>
							"To transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders."
							<br>
							<span class="right">-Dean Kamen, Founder</span>
							<br><br>
							Through innovative programs, <i>F.I.R.S.T.</i> motivates young people to pursue science, technology, engineering, and math in their education and career. <i>F.I.R.S.T.</i> programs improve self-confidence, knowledge, and life skills.
						</div>
						<div class="card-action white">
							<a href="http://www.firstinspires.org/" target="_blank"><span class="orange-text text-accent-4">Visit <i>F.I.R.S.T.</i> Website</span></a>
						</div>
					</div>
				</div>
				
				<!-- FRC -->
				<div class="card">
					<div class="card-image feature-img" style="background-color: black; height:400px">
						<a href="http://www.firstinspires.org/robotics/frc/" target="_blank"><img src="../assets/images/first/robots.jpg" style="opacity: 0.6;"></a>
						<span class="card-title"><h3>First Robotics Competition</h3></span>
					</div>
					<div class="card-content">
					FRC (FIRST Robotics Competition) is a worldwide robotics competition. Teams have a short season to design, build, and program a fully functional robot to meet a unique challenge each year. With teamwork, dedication, and the occasional exhausting late night, teams manage to complete tasks in just six weeks. Through FIRST Robotics, students have an opportunity to gain hands-on experience in using sophisticated software and hardware to compete in a "Varsity Sport for the Mind&trade;". 
					</div>
					<div class="card-action">
						<a href="http://www.firstinspires.org/robotics/frc/" target="_blank"><span class="orange-text text-accent-4">Visit FRC Website</span></a>
					</div>
				</div>
				
				<!-- Game Animations -->
				<div class="card">
					<div class="card-image feature-img" style="background-color: black; height:400px">
						<a href="/first/games/"><img src="../assets/images/games/dozer.jpg" style="opacity: 0.6;"></a>
						<span class="card-title"><h3>Game Animations</h3></span>
					</div>
					<div class="card-action">
						<a href="/first/games/"><span class="orange-text text-accent-4">View Game Animations</span></a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<!-- Dean Kamen -->
				<div class="col m6 s12">
					<div class="card red lighten-4">
						<div class="card-content">
							<img src="../assets/images/first/dean_kamen.jpg" height="300px"><br>
							<div class="header-content">
								<span class="card-title">Dean Kamen</span>
								<h5>FIRST Founder</h5>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Woodie Flowers -->
				<div class="col m6 s12">
					<div class="card blue lighten-4">
						<div class="card-content">
							<img src="../assets/images/first/woodie_flowers.jpg" height="300px"><br>
							<div class="header-content">
								<span class="card-title">Woodie Flowers</span>
								<h5>FIRST Advisor</h5>
							</div>
						</div>
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
</body>
</html>
