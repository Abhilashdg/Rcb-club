<?php
session_start();
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.welcome {
			font-size: larger;
			font-family: fantasy;

		}

		:root {
			--first-color: #E3F8FF;
			--second-color: #DCFAFB;
			--third-color: #FFE8DF;
			--accent-color: #FF5151;
			--dark-color: #161616;
			--aqua-color: aqua;
			--deeppink-color: #FF1493;
			--greenyellow-color: #ADFF2F;
		}

		:root {
			--body-font: 'Open Sans';
			--h1-font-size: 1.5rem;
			--h3-font-size: 1rem;
			--normal-font-size: 0.938rem;
			--smaller-font-size: 0.75rem;
		}

		@media screen and (min-width: 768px) {
			:root {
				--h1-font-size: 2rem;
				--normal-font-size: 1rem;
				--smaller-font-size: 0.813rem;
			}
		}


		*,
		::after,
		::before {
			box-sizing: border-box;
		}

		body {
			margin: 2rem 0 0 0;
			background-color: #fff;
			color: var(--dark-color);
			font-family: var(--body-font);
		}

		h1 {
			font-size: var(--h1-font-size);
		}

		img {
			max-width: 100%;
			height: auto;
		}

		a {
			text-decoration: none;
		}


		.main {
			padding: 2rem 0;
		}

		.bd-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
			max-width: 1200px;
			margin-left: 2.5rem;
			margin-right: 2.5rem;
			align-items: center;
			gap: 2rem;
		}


		.title-shop {
			position: relative;
			margin: 0 2.5rem;
		}

		.title-shop::after {

			position: absolute;
			top: 50%;
			width: 72px;
			height: 2px;
			background-color: var(--dark-color);
			margin-left: .25rem;
		}


		.card {
			position: relative;
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 1.5rem 2rem;
			border-radius: 1rem;
			overflow: hidden;
		}

		article:nth-child(1) {
			background-color: var(--first-color);
		}

		article:nth-child(2) {
			background-color: var(--aqua-color);
		}

		article:nth-child(3) {
			background-color: var(--third-color);
		}

		article:nth-child(4) {
			background-color: var(--greenyellow-color);
		}

		article:nth-child(5) {
			background-color: var(--accent-color);
		}

		article:nth-child(6) {
			background-color: var(--second-color);
		}

		article:nth-child(7) {
			background-color: var(--aqua-color);
		}

		article:nth-child(8) {
			background-color: var(--deeppink-color);
		}

		.card__img {
			width: 180px;
			height: auto;
			padding: 3rem 0;
			transition: .5s;
		}

		.card__name {
			position: absolute;
			left: -25%;
			top: 0;
			width: 3.5rem;
			height: 100%;
			writing-mode: vertical-rl;
			transform: rotate(180deg);
			text-align: center;
			background-color: var(--dark-color);
			color: #fff;
			font-weight: bold;
			transition: .5s;
			text-transform: uppercase;
		}

		.card__icon {
			font-size: 1.5rem;
			color: var(--dark-color);
		}

		.card__icon:hover {
			color: var(--accent-color);
		}

		.card__precis {
			width: 100%;
			display: flex;
			justify-content: space-between;
			align-items: flex-end;
			transition: .5s;
		}

		.card__preci {
			display: block;
			text-align: center;
		}

		.card__preci--before {
			font-size: var(--smaller-font-size);
			color: var(--accent-color);
			margin-bottom: .25rem;

		}

		.card__preci--now {
			font-size: var(--h3-font-size);
			font-weight: bold;

		}


		.card:hover {
			box-shadow: 0 .5rem 1rem #D1D9E6;
		}

		.card:hover .card__name {
			left: 0;
		}

		.card:hover .card__img {
			transform: rotate(30deg);
			margin-left: 3.5rem;
		}

		.card:hover .card__precis {
			margin-left: 3.5rem;
			padding: 0 1.5rem;
		}


		@media screen and (min-width: 1200px) {
			body {
				margin: 3rem 0 0 0;
			}

			.title-shop {
				margin: 0 5rem;
			}

			.bd-grid {
				margin-left: auto;
				margin-right: auto;
			}
		}
	</style>
</head>

<body>
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

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<?php if (isset($_SESSION['username'])) : ?>
			<div class="welcome">
				Welcome
				<strong>
					<?php echo $_SESSION['username']; ?>
				</strong>
			</div>


		<?php endif ?>
	</section>
	<h1 class="title-shop">SHOPPING</h1>
	<main class="main bd-grid">
		<article class="card">
			<div class="card__img">
				<img src="./img/jersey.jpg" alt="">
			</div>
			<div class="card__name">
				<p>Jersey Without Partners</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>
		<article class="card">
			<div class="card__img">
				<img src="./img/jersey1.jpg" alt="">
			</div>
			<div class="card__name">
				<p>Practice Jersey</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>
		<article class="card">
			<div class="card__img">
				<img src="./img/jersey2.jpg" alt="">
			</div>
			<div class="card__name">
				<p>T-Shirt with color</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>

		<article class="card">
			<div class="card__img">
				<img src="./img/pant.jpg" alt="">
			</div>
			<div class="card__name">
				<p>Pant</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>
				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>

		<article class="card">
			<div class="card__img">
				<img src="./img/shoes.jpg" alt="">
			</div>
			<div class="card__name">
				<p>AIR ZOOM SHOES RED</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>

		<article class="card">
			<div class="card__img">
				<img src="./img/sports.jpg" alt="">
			</div>
			<div class="card__name">
				<p>AIR ZOOM SHOE</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>

		<article class="card">
			<div class="card__img">
				<img src="./img/replica.jpg" alt="">
			</div>
			<div class="card__name">
				<p>Jersey with Partners</p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>

		<article class="card">
			<div class="card__img">
				<img src="./img/fan.jpg" alt="">
			</div>
			<div class="card__name">
				<p>Jersey </p>
			</div>
			<div class="card__precis">
				<a href="" class="card__icon">
					<ion-icon name="heart-outline"></ion-icon>
				</a>

				<div>
					<span class="card__preci card__preci--before">$990.00</span>
					<span class="card__preci card__preci--now">$749.00</span>
				</div>
				<a href="" class="card__icon">
					<ion-icon name="cart-outline"></ion-icon>
				</a>
			</div>
		</article>
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script src="./script.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>