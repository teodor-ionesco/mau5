<?php

require_once('m5_bind.php');

?>

<!DOCTYPE HTML>
<html lang="EN-US">
	<head>
		<title>mau5 || My tracks</title>
		<?= HTML::head() ?>
		<style>
			audio
			{
				width: 100%;
			}
		</style>
	</head>
	
	<body>
		<?= HTML::cover() ?>
		<header><?= HTML::header() ?></header>
		
		<main>
			<div class="container">
				<h4 style="color: green;">Audio tracks</h4>
				<hr>
				<div class="why_mau5">
					I am bored and I'm doing anything to fill my time with doing something. I like electronic music more than any other genre out there.
					I like it because I see it as engineering combined with creativity. I think over 75% of electronic music is engineering.
					It's important to understand how programs are working, 
					how signal flow is handled, 
					how it is encoded/decoded etc. in order to create something harmonic and euphoric.
					Plus electronic music can perform any instrument, while no instrument can be used to create what electronic music can perform.
					<br>
					<br>
					I already own a pair of hi-fi headphones, so I started working in a copy of FL Studio 12.
					I mostly use <a href="//www.image-line.com/support/flstudio_online_manual/html/plugins/GMS.htm" target="_BLANK" style="background-color: inherit;">GMS</a> 
					because honestly, this is the only VST I am currently familiar with :)
					<br>
					<br>
					<center>
						<img class="img_fl1" src="//<?= SITE_PORTAL_URL ?>/static/img/fl1.png" width="75%">
						<br>
						<br>
						<img class="img_fl2" src="//<?= SITE_PORTAL_URL ?>/static/img/fl2.png" width="75%">
					</center>
					<br>
					I have been working with FL Studio for more than a year however I never wanted to deepen the knowledge in it. 
					Most (if not all) of my old tracks literally suck. 
					I'm not even bother uploading them because really, you wouldn't want to hear them.
					<br>
					<br>
					I have started to develop some skills in it starting with the beginning of august.
					Below are some tracks of mine. The quality is MP3 CBR at 320kb/s.
					Some may be silly, and I remind you: I don't dare you to listen to them. You can leave anytime you wany :)
				</div>
				<br>
				<br> 
				<audio controls title="Slicer">
					<source src="//<?= SITE_PORTAL_URL ?>/static/mpeg/slicer.mp3" type="audio/mpeg">
				</audio>
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