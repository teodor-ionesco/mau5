<?php

require_once('m5_bind.php');

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>mau5 || Memes</title>
		<?= HTML::head() ?>
		<style>
			.video-container
			{
				width: 100%;
				padding-bottom: 50%;
			}
		</style>
	</head>
	
	<body>
		<?= HTML::cover() ?>
		<header><?= HTML::header() ?></header>
		
		<main>
			<br>
			<div class="container">
				<div class="why_mau5">
					I like watching memes on youtube and I can say I already have an entire pack set up.
					The only issue is that I never ever bothered to incorporate all of them in a favorite playlist or so.
					<br>
					<br>
					Below I am offering you a list with recent memes I have watched and liked at the same time.
					You're not obeyed to view them, just know that they are posted here as well :)
				</div>
				<br>
				<div class="row">
					<div class="col s12 m12 l6">
						<div class="video-container">
							<iframe width="" src="https://www.youtube.com/embed/CsGYh8AacgY?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<br>
					</div>
					<div class="col s12 m12 l6">
						<div class="video-container">
							<iframe width="" src="https://www.youtube.com/embed/CsGYh8AacgY?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<br>
					</div>
				</div>
			</div>
		</main>
		
		<footer><?= HTML::footer() ?></footer>
		<?= HTML::javascript() ?>
	</body>
</html>