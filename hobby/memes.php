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
					I like watching memes on youtube. I never ever bothered to incorporate all of them in a favorite playlist or so.
					Therefore I suppose this is the reason I decided to come up with this page.
					<br>
					<br>
					Below I am offering you a list with recent memes I have watched and liked at the same time.
					You're not obeyed to view them, just know that they are posted here as well. This IS my playlist :)
				</div>
				<br>
				
<?php

$db = new PDO('mysql:host='.DB_HST.';dbname='.DB_NAM, DB_USR, DB_PSS);

$rows = ($db -> query('SELECT * FROM memes ORDER BY nr DESC;')) -> fetchAll(PDO::FETCH_ASSOC);

$d_row = 2;

foreach($rows as $key => $array)
{
	if($d_row === 2)
	{
		print('<div class="row">');
		$d_row = 0;
	}
	
	print('
		<div class="col s12 m12 l6">
			<div class="video-container">
				<iframe width="" src="'.$array['url'].'" frameborder="0" allowfullscreen></iframe>
			</div>
			<br>
		</div>
	');
	
	$d_row++;
	
	if($d_row === 2)
	{
		print('</div>');
		$d_row = 0;
	}
}


?>
			</div>
		</main>
		
		<footer><?= HTML::footer() ?></footer>
		<?= HTML::javascript() ?>
	</body>
</html>