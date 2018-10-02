<?php 

session_start();

header('Cache-Control: no-cache, no-store', true);

if(empty($_SESSION['l']))
	header('Location: index', true, 301);

require_once('m5_bind.php');

$db = new PDO('mysql:host='.DB_HST.';dbname='.DB_NAM, DB_USR, DB_PSS);

////////// Track upload part.
if(	!empty($_POST['t_name']) 	&&
	!empty($_POST['t_mastered']) &&
	!empty($_POST['t_released']) &&
	!empty($_FILES['t_fname']) )
{
	$name = $_POST['t_name'];
	$mastered = $_POST['t_mastered'];
	$released = $_POST['t_released'];
	$fname = md5($_FILES['t_fname']['name'].time()) . '.' . @end(explode('.', $_FILES['t_fname']['name']));
	$uploaded = time();
	
	move_uploaded_file($_FILES['t_fname']['tmp_name'], '../static/mpeg/'. $fname);
	
	$prepared = $db -> prepare("INSERT 
								INTO tracks(name, uploaded, mastered, released, filename)
								VALUES(:name, :uploaded, :mastered, :released, :fname);");
	$prepared -> execute([
		':name' => $name,
		':uploaded' => $uploaded,
		':mastered' => $mastered,
		':released' => $released,
		':fname' => $fname
	]);
}

////////// Track update part.
if(!empty($_GET['up_t']) && !empty($_POST['up']['t_nr']))
{
	if(!empty($_POST['up']['t_name']))
	{
		$prepared = $db -> prepare("UPDATE tracks
									SET name = :name
									WHERE tracks.nr = :nr;");
		$prepared -> execute([
			':name' => $_POST['up']['t_name'],
			':nr' => $_POST['up']['t_nr'],
		]);
	}
	
	if(!empty($_POST['up']['t_mastered']))
	{
		$prepared = $db -> prepare("UPDATE tracks
									SET mastered = :mastered
									WHERE tracks.nr = :nr;");
		$prepared -> execute([
			':mastered' => $_POST['up']['t_mastered'],
			':nr' => $_POST['up']['t_nr'],
		]);
	}
	
	if(!empty($_POST['up']['t_released']))
	{
		$prepared = $db -> prepare("UPDATE tracks
									SET released = :released
									WHERE tracks.nr = :nr;");
		$prepared -> execute([
			':released' => $_POST['up']['t_released'],
			':nr' => $_POST['up']['t_nr'],
		]);
	}

	if(!empty($_FILES['up']['name']['t_fname']))
	{
		$prepared = $db -> prepare("SELECT filename
									FROM tracks
									WHERE tracks.nr = :nr;");
		$prepared -> execute([
			':nr' => $_POST['up']['t_nr'],
		]);

		unlink('../static/mpeg/' . $prepared -> fetch(PDO::FETCH_ASSOC)['filename']);
		
		$fname = md5($_FILES['up']['name']['t_fname'].time()) . '.' . @end(explode('.', $_FILES['up']['name']['t_fname']));
		
		move_uploaded_file($_FILES['up']['tmp_name']['t_fname'], '../static/mpeg/' . $fname); 
		
		$prepared = $db -> prepare("UPDATE tracks
									SET filename = :fname
									WHERE tracks.nr = :nr;");
		$prepared -> execute([
			':fname' => $fname,
			':nr' => $_POST['up']['t_nr'],
		]);
	}
}

////////// Track delete part.
if(!empty($_POST['t_number']))
{
	$prepare = $db -> prepare("SELECT filename 
								FROM tracks
								WHERE tracks.nr = :nr;");
								
	$prepare -> execute([
		':nr' => $_POST['t_number'],
	]);
	
	unlink('../static/mpeg/'. $prepare -> fetch(PDO::FETCH_ASSOC)['filename']);
	
	$prepare = $db -> prepare("DELETE 
								FROM tracks
								WHERE tracks.nr = :nr;");
								
	$prepare -> execute([
		':nr' => $_POST['t_number'],
	]);
}

////////// Post meme part.
if(!empty($_POST['m_url']))
{
	$url = preg_replace('@https?://.*\.youtube\.com/watch\?v=@', 'https://www.youtube.com/embed/', $_POST['m_url']);
	$url = preg_replace('@https?://.*\.?youtu.be/@', 'https://www.youtube.com/embed/', $url);	

	if($url !== $_POST['m_url'])
	{	
		$url = $url . '?rel=0';

		$ch = curl_init($_POST['m_url']);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			$output = curl_exec($ch);
		curl_close($ch);
		
		preg_match('@<span id="eow-title" class="watch-title" dir="ltr" title="(.*)">@', $output, $m);
			
		$description = $m[1];	
		
		$prepare = $db -> prepare("INSERT  
									INTO memes(url, description)
									VALUES(:url, :description);");
		$prepare -> execute([
			':url' => $url,
			':description' => $description,
		]);
	}
	else
	{
		print('<span style="color:red;">Not a youtube URL.</span>');
	}
}

if(!empty($_POST['m_nr']))
{
	$prepare = $db -> prepare("DELETE
								FROM memes
								WHERE memes.nr = :nr;");
	$prepare -> execute([
		':nr' => $_POST['m_nr'],
	]);
}	

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dashboard</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<table>
			<tr>
				<td style="position: relative; top: -14px;">
					<form action="dash" method="POST" enctype="multipart/form-data" style="">
						<h4>Upload track:</h4>
						<table border="1">
							<tr>
								<td>Name:&nbsp;</td>
								<td><input type="text" name="t_name" required="" autofocus=""></td>
							</tr>
							<tr>
								<td>Mastered:&nbsp;</td>
								<td><input type="text" name="t_mastered" required=""></td>
							</tr>
							<tr>
								<td>Released:&nbsp;</td>
								<td><input type="text" name="t_released" required=""></td>
							</tr>
							<tr>
								<td>Filename:&nbsp;</td>
								<td><input type="file" name="t_fname" required=""></td>
							</tr>			
						</table>
						<br>
						<input type="submit">
					</form>
				</td>

				<td>
					<form action="dash.php?up_t=1" method="POST" enctype="multipart/form-data" style="">
						<h4>Update track:</h4>
						<table border="1">
							<tr>
								<td>Track no. &nbsp;</td>
								<td><input type="text" name="up[t_nr]" required="" autofocus=""></td>
							</tr>
							<tr>
								<td>Name:&nbsp;</td>
								<td><input type="text" name="up[t_name]"  autofocus=""></td>
							</tr>
							<tr>
								<td>Mastered:&nbsp;</td>
								<td><input type="text" name="up[t_mastered]" ></td>
							</tr>
							<tr>
								<td>Released:&nbsp;</td>
								<td><input type="text" name="up[t_released]" ></td>
							</tr>
							<tr>
								<td>Filename:&nbsp;</td>
								<td><input type="file" name="up[t_fname]" ></td>
							</tr>			
						</table>
						<br>
						<input type="submit">
					</form>				
				</td>

				<td style="position: relative; top: -55px;">
					<form action="dash" method="POST" style="">
						<h4>Delete track:</h4>
						<table border="1">
							<tr>
								<td>Track no:</td>
								<td><input name="t_number" type="text" required=""></td>
							</tr>
						</table>
						<br>
						<input type="submit">
					</form>
				</td>				
			</tr>
		</table>
		
		<br>
		
		<form action="dash" method="POST" style="position: relative; display: inline-block; margin-left: 10px;">
			<h4>Post meme</h4>
			<table border="1">
				<tr>
					<td>YouTube URL:&nbsp;</td>
					<td><input name="m_url" type="text" required=""></td>
				</tr>
			</table>
			<br>
			<input type="submit">
		</form>
		
		<form action="dash" method="POST" style="display: inline-block; margin-left: 10px;">
			<h4>Delete meme</h4>
			<table border="1">
				<tr>
					<td>Nr:&nbsp;</td>
					<td><input name="m_nr" type="text" required=""></td>
				</tr>
			</table>
			<br>
			<input type="submit">
		</form>
		
		<div style="margin-left: 10px;">
			<h4>Posted memes:</h4>
			<table border="1px">
				<thead>
					<tr>
						<td>Nr.</td>
						<td>Description</td>
					</tr>
				</thead>
				<tbody>
<?php

$rows = ($db -> query('SELECT * FROM memes ORDER BY nr DESC;')) -> fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $key => $array)
{
	print('
		<tr>
			<td>'.$array['nr'].'</td>
			<td>'.$array['description'].'</td>
		</tr>
	');
}
?>
				</tbody>
			</table>
		</div>
	</body>
</html>