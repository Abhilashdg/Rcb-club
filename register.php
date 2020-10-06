<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1">

	<title>
		Registration system PHP and MySQL
	</title>
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
			display: inline-block;
			border: 1px solid rgb(71, 15, 161);
			box-sizing: border-box;
			font-weight: bolder;
			font-family: fantasy;
			margin: 2px;
			margin-bottom: 10px;
			justify-content: center;
			align-content: center;
			font-weight: bolder;
			font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
			font-size: larger;
		}

		.chat {
			width: 50%;
			margin: 50px auto 0px;
			color: black;
			text-align: center;
			padding: 50px;


		}

		.regi {
			background-image: url(./img/logo2.jpg);
			border-radius: 55px;
			background-size: cover;
		}
	</style>
</head>

<body class="regi">
	<div class="fixed-top">
		<header class="topbar">


			<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
				<div class="container">
					<a class="navbar-brand" href="index.html" style="text-transform: uppercase;"> RCB.COM</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">

						<ul class="navbar-nav ml-auto">

							<li class="nav-item active">
								<a class="nav-link" href="#">Home
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
								<a class="nav-link" href="records.php">Acheivements</a>
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

		<h2>Register here</h2>
		<form method="post" action="register.php">


			<?php include('errors.php'); ?>


			<label>Enter Username</label>
			<input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>"><br>


			<label class="email1">Email</label>
			<input type="email" name="email" placeholder="Enter email-id" value="<?php echo $email; ?>"><br>

			<label>Enter Password</label>
			<input type="password" name="password_1" placeholder="Enter password"><br>

			<label>Confirm password</label>
			<input type="password" name="password_2" placeholder="Enter Confirm password"><br>

			<button type="submit" class="btn" name="reg_user">
				Register
			</button>

			<p>
				Already having an account?
				<a href="login.php">
					Login Here!
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