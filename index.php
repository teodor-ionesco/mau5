<?php

require_once('m5_bind.php');

?>

<!DOCTYPE HTML>
<html lang="EN-US">
	<head>
		<title>Welcome! || mau5</title>
		<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">	-->
		<meta name="viewport" content="user-scalable=no, width=device-width">
		<style>
			body 
			{
				background-image: url(//<?= SITE_PORTAL_URL ?>static/img/imagedoc-darknoise.png);
			}
			
			header
			{
				box-shadow: 0px 8px 8px #8a1f1f;
				border-radius: 10px;
				text-align: center;
			}
			
			header div
			{
				color: yellow;
				font-family: "Chiller", "Sans-Serif";
				font-size: 70px;
				color: #ffff00;
			}
			
			main
			{
				margin: 50px;
				text-align: center;
			}
			
			a 
			{
				background-color: #1f1f1f;
				color: forestgreen;
				line-height: 1.5;
				font-size: 25px;
				font-family: "Comic Sans MS", cursive, sans-serif;
				text-decoration: none;
			}
			
			a:hover
			{
				background-color: black;
				/*text-decoration: underline;*/
				color: red;
			}
			
			a:active
			{
				color: brown;
			}
		</style>
	</head>
	
	
	<body title="The gateway to a deadmau5 fan">
		<div id="cover" style="background-color: #232323; position: absolute; width: 100%; height: 100%; left: -5px;"></div>
		
		<header>
			<div>mau5portal</div>
		</header>
		
		<main>
			<a href="//<?= SITE_HOBBY_URL ?>" title="The one I like" style="">My personal site</a>
			<br>
			<a href="#" title="My website built for employment and official stuff" style="">My official website</a>
			<br>
			<br>
			<img src="static/img/b04.gif" width="200" title="nyan salutes you! :^)">
		</main>
		
		<footer>
		</footer>
		<!--script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>-->
		<script src="static/js/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				$('#cover').attr('hidden', '');
			});
		</script>
	</body>
</html>