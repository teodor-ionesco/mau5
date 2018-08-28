<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome! || mau5</title>
		<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">	-->
		<meta name="viewport" content="user-scalable=no, width=device-width">
		<style>
			body 
			{
				background-image: url(static/img/imagedoc-darknoise.png);
			}
			
			header
			{
				box-shadow: 0px 8px 8px #8a1f1f;
				border-radius: 10px;
				text-align: center;
			}
			
			header div
			{
				color: yellow;
				font-family: "Chiller", "Sans-Serif";
				font-size: 88px;
				color: #ffff00;
			}
			
			main
			{
				margin: 50px;
				text-align: center;
			}
			
			a 
			{
				color: forestgreen;
				line-height: 2;
				font-size: 30px;
				font-family: "Comic Sans MS", cursive, sans-serif;
				text-decoration: none;
			}
			
			a:hover
			{
				text-decoration: underline;
				color: red;
			}
			
			a:active
			{
				color: brown;
			}
		</style>
	</head>
	
	
	<body title="The gateway to a deadmau5 fan.">
		<div id="cover" style="background-color: #232323; position: absolute; width: 100%; height: 100%; left: -5px;"></div>
		
		<header>
			<div>mau5portal</div>
		</header>
		
		<main>
			<a href="#" title="The one I like">My personalized website</a>
			<br>
			<a href="#" title="My website built for employment and official stuff">My official website</a>
			<br>
			<br>
			<img src="static/img/b04.gif" width="200">
		</main>
		
		<footer>
		</footer>
		<!--script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>-->
		<script src="static/js/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				$('#cover').attr('hidden', '');
			});
		</script>
	</body>
</html>