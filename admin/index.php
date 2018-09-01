<?php

session_start();

header('Cache-Control: no-cache, no-store', true);

if(!empty($_SESSION['l']))
	header('Location: dash', true, 301);

require_once('m5_bind.php');

if(!empty($_POST['usr']) && !empty($_POST['pss']))
{
	if($_POST['usr'] === 'admin')
	{
		if(password_verify($_POST['pss'], '$2y$10$7jH2iQywFmkeyChTg59iqu3SISWylY9VhZPIJKsUg43szzaNrdZJa'))
		{
			$_SESSION['l'] = true;
			header('Location: dash', true, 301);
		}
	}
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>mau5 || Admin?</title>
		<?= HTML::head() ?>
		<style>
			table td
			{
				padding: 0px 0px;
				line-height: 4;
			}
			
			table 
			{
				width: 200px;
			}
			
			input[type="text"]
			{
				margin: auto !important;
				height: auto !important;
				width: auto !important;
				padding: auto !important;
				text-align: center;
				color: green;
			}
			
			input[type="password"]
			{
				margin: auto !important;
				height: auto !important;
				width: auto !important;
				padding: auto !important;
				text-align: center;
				color: green;
			}
			
			input[type="text"]:focus {
				border-color: white !important;				
			}
			
			input[type="password"]:focus {
				border-color: white !important;			
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
					Feelin' admin today? Let's see if you know the password :D 
				</div>
				<br>
				<form method="POST" action="//<?= SITE_PORTAL_URL ?>/admin/">
					<table>
						<tr>
							<td><span style="color: yellow;">Username:</span>&nbsp;</td>
							<td><input name="usr" type="text" required="" autofocus=""></td>
						</tr>
							<td><span style="color: yellow;">Password:</span>&nbsp;</td>
							<td><input name="pss" type="password" required=""></td>
					</table>
					<br>
					<input type="submit">
				</form>
			</div>
		</main>
		
		<footer><?= HTML::footer() ?></footer>
		<?= HTML::javascript() ?>
	</body>
</html>
