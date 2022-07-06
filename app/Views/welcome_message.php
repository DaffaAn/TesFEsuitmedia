<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Company Website</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- STYLES -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style {csp-style-nonce}>
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}

		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}

		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}

		.dropdown:hover>.dropdown-menu {
			display: block
		}

		.form-center {
			display: flex;
			justify-content: center;
		}
	</style>


</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#" style="margin-left: 100px;">Company</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:100px;">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						ABOUT
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">HISTORY</a>
						<a class="dropdown-item" href="#">VISION MISSION</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">OUR WORK</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">OUR TEAM</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">CONTACT</a>
				</li>
			</ul>

		</div>
	</nav>


	<!-- CONTENT -->

	<div id="carouselExampleControls" style="margin-bottom: 100px; ;" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" style="background-image:url(images/bg.jpg); padding-bottom: 100px; padding-top: 330px; background-repeat:no-repeat; background-size:cover">
				<h1 style=" background-color:rgb(0,0,0,0.5); color:white; width: 900px; margin-top: 200px; margin-left:100px;">THIS IS A PLACE WHERE TECHNOLOGY & CREATIVITY FUSED INTO DIGITAL CHEMISTRY</h1>
			</div>
			<div class="carousel-item" style="background-image:url(images/about-bg.jpg); padding-bottom: 100px; padding-top: 330px; background-repeat:no-repeat; background-size:cover">
				<h1 style=" background-color:rgb(0,0,0,0.5); color:white; width: 900px; margin-top: 200px; margin-left:100px;">WE DON'T HAVE THE BEST BUT WE HAVE THE GREATEST TEAM</h1>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" style="width: 50px;" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" style="width: 50px;" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container" style="margin-bottom:100px ;">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<div style="background-color: #bf523f;" class="card-body">
						<p style="text-align: center;"><img src="images/lightbulb-o.png"></p>
						<h4 style="text-align:center ;color:white;">INNOVATIVE</h4>
						<p class="card-text" style="text-align:center ;color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, provident? Odio</p>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<div style="background-color: #52b364;" class="card-body">
						<p style="text-align: center;"><img src="images/bank.png"></p>
						<h4 style="text-align:center ;color:white;">LOYALTY</h4>
						<p class="card-text" style="text-align:center ;color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, provident? Odio</p>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<div style="background-color: #5085ba;" class="card-body">
						<p style="text-align: center;"><img src="images/balance-scale.png"></p>
						<h4 style="text-align:center ;color:white;">RESPECT</h4>
						<p class="card-text" style="text-align:center ;color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, provident? Odio</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="form-center">
		<form class="needs-validation" novalidate>
			<h1 style="margin-left: 120px ;">Contact Us</h1>
			<div class="form-row">
				<div class="col-md-5 mb-3">
					<label for="validationCustom01">Name</label>
					<input type="text" class="form-control" id="validationCustom01" style="width: 425px ;" required>
					<div class="invalid-feedback">
						This field is required
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-5 mb-3">
					<label for="validationCustom01">Email</label>
					<input type="email" class="form-control" id="validationCustom01" style="width: 425px ;" required>
					<div class="invalid-feedback">
						invalid email address
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-5 mb-3">
					<label for="validationCustom01">Message</label>
					<textarea class="form-control" id="validationCustom01" style="width: 425px ;" required></textarea>
					<div class="invalid-feedback">
						This field is required
					</div>
				</div>
			</div>
			<button class="btn btn-primary" style="width:425px;  margin-bottom: 50px;" type="submit">Submit form</button>
		</form>
	</div>

	<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

	<footer>

		<div class="copyrights">

			<p> Copyright &copy; <?= date('Y') ?>. PT Company</p>
			<p><img src="images/facebook-official.png" style="width: 25px; margin-right:5px;"><img src="images/twitter.png" style="width: 25px;"></p>

		</div>

	</footer>

	<!-- SCRIPTS -->

	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}
	</script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- -->

</body>

</html>