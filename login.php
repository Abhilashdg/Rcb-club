<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1,minimum-scale=0.1,user-scalable=no">
	<title>
		Login and Registration
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		h2 {
			color: blue;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
			font-weight: bolder;
		}

		input {
			padding: 10px 15px;
			margin-left: 8px 0;

			border: 1px solid rgb(71, 15, 161);
			box-sizing: border-box;
			font-weight: bolder;
			font-family: fantasy;
			margin: 2px;
			margin-bottom: 10px;
			justify-content: left;
			font-weight: bolder;
			font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
			font-size: larger;
		}


		.aa {
			background-image: url(./img/logo1.jpg);
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>
</head>

<body class="aa">
	<div class="fixed-top">
		<header class="topbar">


			<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
				<div class="container">
					<a class="navbar-brand" style="text-transform: uppercase;"> RCB.COM</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">

						<ul class="navbar-nav ml-auto">

							<li class="nav-item active">
								<a class="nav-link" href="home.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>



							<li class="nav-item">
								<a class="nav-link" href="gallery.php">Gallery</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="admin.php">Admin</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="login.php">Login</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="register.php">Sign up</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="index.php?logout='1'">
									Logout
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>
	<section>
		<div class="chat">
			<h2>Login Here!</h2>

			<form method="post" action="login.php">



				<?php include('errors.php'); ?>


				<label>Enter username</label>
				<input type="text" name="username" placeholder="Enter Username"><br>

				<label>Enter password</label>
				<input type="password" name="password" placeholder="Enter password"><br>



				<button type="submit" class="btn" name="login_user">
					Login
				</button>

				<p>
					New Here?
					<a href="register.php">
						Click here to regsiter!
					</a>
				</p>



			</form>
		</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script src="./script.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

</body>


</html>