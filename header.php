<?php $page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Zitrone Natural</title>
	</head>

	<body>
		<header class="js-header">
			<div class="grid">
				<div class="grid__col--4">
					<hgroup>
						<a href="index.php">
							 <h1 class="main-logo">Zitrone Natural</h1>
						</a>
					</hgroup>
				</div>
				<div class="grid__col--11">
					<nav class="main-menu hidden-sm">
						<ul>
							<li <?php if($page == 'services.php') echo 'class="active"'; ?>><a href="services.php">Services</a></li>
							<li <?php if($page == 'about.php') echo 'class="active"'; ?>><a href="about.php">About us</a></li>
							<li <?php if($page == 'clients.php') echo 'class="active"'; ?>><a href="clients.php">Clients</a></li>
							<li <?php if($page == 'contact.php') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="mobile-menu-icon" class="visible-sm"><i class="fa fa-bars"></i></div>
			<div class="mobile-menu visible-sm" id="mobile-menu-js">
				<ul>
					<li <?php if($page == 'services.php') echo 'class="active"'; ?>><a href="services.php">Services</a></li>
					<li <?php if($page == 'about.php') echo 'class="active"'; ?>><a href="about.php">About us</a></li>
					<li <?php if($page == 'clients.php') echo 'class="active"'; ?>><a href="clients.php">Clients</a></li>
					<li <?php if($page == 'contact.php') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</header>