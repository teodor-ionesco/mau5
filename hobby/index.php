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
					which is the nick of a well known Canadian music producer named Joel Zimmerman. 
					I choose it partly because I like Joel's tracks, partly because I like the way it sounds: mau5. Or maybe because I lack imagination, who knows :)
					<a href="#!" style="background-color: inherit;" title="Listen :^)">
						<img width="20" src="//<?= SITE_PORTAL_URL ?>/static/img/sound.png" id="mau5hear">
					</a>. 
					Neutral and original at the same time.
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
					If you wanna explore this site deeper, hit on <a href="#a_menu_li" style="background-color: inherit;">menu</a> pseudo-button from right top corner of the screen.
				</div>
			</div>
		</main>
		
		<footer><?= HTML::footer() ?></footer>
		<?= HTML::javascript() ?>
		<script>
			var mau5hear = new Audio();
				mau5hear.src = '//<?= SITE_PORTAL_URL ?>/static/mpeg/mau5.mp3';
				
			$('#mau5hear').click(function()
			{
				mau5hear.play();
			});
		</script>
	</body>
</html>