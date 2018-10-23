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
				width: 350px;
			}
			
			table
			{
				border-collapse: collapse;
			}
			
			table, th, td
			{
				border: 1px solid white;
			}
			
			.table_tracks thead tr td
			{
				color: yellow;
				font-size: 17px;
				text-align: center;
			}
			
			.table_tracks tbody td
			{
				color: pink;
				font-size: 17px;
				text-align: center;
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
					I don't even bother to upload them because really, you wouldn't want to hear them.
					<br>
					<br>
					I have started to develop some skills in it starting with the beginning of august (2018).
					Below are some tracks of mine. The quality is MP3 CBR @ 320kb/s.
					Some may be silly, and I remind you: I don't dare you to listen to them. You can leave anytime you want :)
				</div>
				<br>
				<br> 
				<table class="table_tracks">
					<thead>
						<tr>
							<td>No.</td>
							<td>Name</td>
							<td>Uploaded</td>
							<td>Mastered</td>
							<td>Released</td>
							<td>MP3</td>
						</tr>
					</thead>
					<tbody>
<?php

$db = new PDO('mysql:host='.DB_HST.';dbname='.DB_NAM, DB_USR, DB_PSS);

$rows = ($db -> query('SELECT * FROM tracks;')) -> fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $key => $array)
{
	print('<tr>');
	
	print('
		<td><code>'.$array['nr'].'</code></td>
		<td><code>'.$array['name'].'</code></td>
		<td><code>'.date('d/m/Y', $array['uploaded']).'</code></td>
		<td><code>'.$array['mastered'].'</code></td>
		<td><code>'.$array['released'].'</code></td>
		<td>
			<audio controls title="Slicer">
				<source src="//'.SITE_PORTAL_URL.'/static/mpeg/'.$array['filename'].'" type="audio/mpeg">
			</audio>
		</td>
	');
	
	print('</tr>');
}

?>
					</tbody>
				</table>
			</div>
		</main>
		
		<footer><?= HTML::footer() ?></footer>
		<?= HTML::javascript() ?>		
	</body>
</html>