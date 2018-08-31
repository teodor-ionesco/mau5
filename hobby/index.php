<?php

require_once('m5_bind.php');

?>

<!DOCTYPE HTML>
<html lang="EN-US">
	<head>
		<title>mau5 || Welcome!</title>
		<?= HTML::head() ?>
		<style>
			.img_joel 
			{
				border-radius: 10px;
				box-shadow: 0px 0px 75px red;
			}
		</style>
	</head>
	
	<body>
		<?= HTML::cover() ?>
		<header><?= HTML::header() ?></header>
		
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
					<img class="img_joel" src="//<?= SITE_PORTAL_URL ?>/static/img/joel.png" width="75%" title="deadmau5 during his Masterclass">
				</center>
				<br> 
				<div class="why_mau5">
					In case you wanna explore this 5ite, hit on <a href="#a_menu_li" style="background-color: inherit;">menu</a> pseudo-button from right top corner of the screen.
				</div>
			</div>
		</main>
		
		<footer><?= HTML::footer() ?></footer>
		
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
		<script src="//<?= SITE_PORTAL_URL ?>/static/js/materialize.min.js"></script>
	</body>
</html>