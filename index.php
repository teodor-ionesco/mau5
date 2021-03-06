<?php

require_once('m5_bind.php');

?>

<!DOCTYPE HTML>
<html lang="EN-US">
	<head>
		<title>Welcome! || mau5</title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no, width=device-width">
		
		<style>
			@font-face
			{
				font-family: 'Chiller';
				src: url(//<?= SITE_PORTAL_URL ?>/static/fonts/CHILLER.TTF) format('truetype');
			}
			
			body 
			{
				background-image: url(//<?= SITE_PORTAL_URL ?>/static/img/imagedoc-darknoise.png);
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
		<div id="cover" style="background-color: #232323; position: absolute; width: 100%; height: 1000%; left: -5px; top: -5px;">
			<img id="cover_img" hidden="" style="position: absolute;" src="//<?= SITE_PORTAL_URL ?>/static/img/spinner.gif" width="10%">
		</div>
		
		<header>
			<div>mau5portal</div>
		</header>
		
		<main>
			<a href="//<?= SITE_HOBBY_URL ?>" title="The one I like" style="">My personal site</a>
			<br>
			<a href="//<?= SITE_PUBLIC_URL ?>" title="My website built for employment and official stuff" style="">My official website</a>
			<br>
			<br>
			<img src="//<?= SITE_PORTAL_URL ?>/static/img/b04.gif" width="200" title="nyan salutes you! :^)">
		</main>
		
		<footer>
		</footer>

		<script src="//<?= SITE_PORTAL_URL ?>/static/js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#cover_img').removeAttr('hidden');
				$('#cover_img').css('left', ($(window).width()/2 - $('#cover_img').width()/2)+ 'px');
				$('#cover_img').css('top', ($(window).height()/2 - $('#cover_img').height()/2)+ 'px');
			});

			$(window).on('load', function()
			{
				$('#cover').attr('hidden', '');
			});
		</script>
	</body>
</html>