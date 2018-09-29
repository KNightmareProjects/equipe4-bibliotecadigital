<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<audio id="musica" hidden loop="true" Autoplay="true" src="0.mp3"></audio>
    <?php
    if($_COOKIE["hackatecaMusic"] == null) setcookie("hackatecaMusic","0",time()+999999999);
    if($_COOKIE["hackatecaMusic"] != "0" && $_COOKIE["hackatecaMusic"] != null) echo("<script>document.getElementById('musica').src = '".$_COOKIE['hackatecaMusic'].".mp3'</script>");
    ?>
<html>
	<head>
		<title>Hackateca - Sua biblioteca universal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" data-video="images/tamp">
					<div class="inner">
						<header>
							<h1>Hackateca</h1>
							<p>Aqui você encontrará uma grande variedade de assuntos.</p>
						</header>
						<a href='?main'><button>Home</button></a> <a href='?options'><button>Options</button></a>
					<!--	<a href="#main" class="more">Learn More</a>  -->
					</div>
				</section>

			<!-- Main -->
				
				<?php
				$page="";
                    if(isset($_GET["info"])){$page="pages/info.php";}
                    elseif(isset($_GET["read"])){$page="pages/read.php";}
                    elseif(isset($_GET["options"])){$page="pages/options.php";}
                    else $page="pages/index.php";
                    include_once($page);
				?>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>Agradecemos a preferência</h2>
						<p>[Hackaton FW 2018]</p>
						<!--
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						-->
						<p class="copyright">&copy; Copyright 2018 | KNightmare Projects</a>.</p>
					</div>
				</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



	</body>
</html>
