<?php 

session_start();

header('Cache-Control: no-cache, no-store', true);

if(empty($_SESSION['l']))
	header('Location: index', true, 301);

require_once('m5_bind.php');


////////// Track upload part.
if(	!empty($_POST['t_name']) 	&&
	!empty($_POST['t_mastered']) &&
	!empty($_POST['t_released']) &&
	!empty($_FILES['t_fname']) )
{
	$db = new PDO('mysql:host='.DB_HST.';dbname='.DB_NAM, DB_USR, DB_PSS);

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

////////// Track delete part.
if(!empty($_POST['t_number']))
{
	$db = new PDO('mysql:host='.DB_HST.';dbname='.DB_NAM, DB_USR, DB_PSS);
	
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

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dashboard</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form action="dash" method="POST" enctype="multipart/form-data" style="display: inline-block; margin-left: 10px;">
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
		
		<form action="dash" method="POST" style="display: inline-block; position: absolute; margin-left: 10px;">
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
	</body>
</html>