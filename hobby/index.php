<?php

require_once('m5_bind.php');

?>

<!DOCTYPE HTML>
<html lang="EN-US">
	<head>
		<title>mau5 || Welcome!</title>
		<link rel="stylesheet" href="//<?= SITE_PORTAL_URL ?>static/css/materialize.min.css">
		<meta charset="UTF-8">
		<style>
			body 
			{
				background-image: url(//<?= SITE_PORTAL_URL ?>static/img/imagedoc-darknoise.png);
			}
			
			header
			{
				box-shadow: 0px 8px 8px #8a1f1f;
				border-radius: 10px;
				
			}
			
			header h
			{
				color: yellow;
				font-family: "Chiller", "Sans-Serif";
				font-size: 70px;
				color: #ffff00;
				line-height: 0.3;
			}
			
			a
			{
				background-color: #1f1f1f;
				color: forestgreen;
				line-height: 1.5;
				font-size: 20px;
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
			
			.menu_li
			{
				position: absolute;
			}
			
			.menu_li a
			{
				font-size: 15px; !important
			}
			
			.why_mau5
			{
				color: #ff96a8;
				font-size: 20px;
				font-family: "Comic Sans MS", cursive, sans-serif;
			}
			
			.img_joel 
			{
				box-shadow: 0px 0px 75px red;
			}
		</style>
	</head>
	
	<body>
		<div id="cover" style="background-color: #232323; position: absolute; width: 100%; height: 100%;"></div>
		<header>
			<div class="container" style="text-align: right;">
				<a id="a_menu_li" href="#" >Ménu</a>
				<ul id="menu_li" class="menu_li" hidden="">
					<li><a href="#">Cartofi</a></li>
					<li><a href="#">Pepene</a></li>
				</ul>
			</div>
			<center>
				<h>mau5ite!</h>
			</center>
			<br>
		</header>
		
		<br>
		<main>
			<div class="container">
				<h4 style="color: green;">Prologue: <i>about this site</i></h4>
				<hr>
				<div class="why_mau5">
					Why <span style="color: red;">mau5</span>? Wat is <span style="color: red;">mau5</span>??
					<br>
					<br>
					<span style="color: red;">mau5</span> comes from "dead<span style="color: red;">mau5</span>' 
					which is the nick of a well known Canadian music producer named Joel Zimmerman. I can't say why I choose it.
					I could have chosen smthing like <span style="color: brown;">r@ven</span> or <span style="color: brown;">d0ll</span>.
					Partly because I like Joel's tracks, partly because I like the way it sounds: mau5. Neutral and original at the same time.
					<br>
					<br>
					Joel, if you're reading this, plz don't sue me :)
				</div>
				<br>
				<center>
					<img class="img_joel" src="//<?= SITE_PORTAL_URL ?>static/img/joel.png" width="75%">
				</center>
				
				<br> 
			</div>
		</main>
		
		<footer>
		</footer>
		
		<script src="//<?= SITE_PORTAL_URL ?>static/js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#cover').attr('hidden', '');
			});
			
			$(window).resize(function(){
				$('#menu_li').css('left', ($('#a_menu_li').position()).left);
			});
			
			var gMenuLiToggle = 0;
			
			$('#a_menu_li').click(function()
			{
				if(gMenuLiToggle === 0)
				{
					$('#menu_li').css('left', ($('#a_menu_li').position()).left);
					$('#menu_li').removeAttr('hidden');
					
					gMenuLiToggle++;
				}
				else
				{
					$('#menu_li').attr('hidden', '');
					
					gMenuLiToggle--;
				}
			});
		</script>
		<script src="//<?= SITE_PORTAL_URL ?>static/js/materialize.min.js"></script>
	</body>
</html>