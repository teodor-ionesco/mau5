<?php

class HTML
{
	public static function header()
	{
		print('
			<div class="container" style="text-align: right;">
				<a id="a_menu_li" name="a_menu_li" href="#" >Ménu</a>
				<ul id="menu_li" class="menu_li" hidden="">
					<center>
						<li><a href="tracks">Tracks</a></li>
						<li><a href="memes">Memes</a></li>
						<li><a href="pics">Pics</a></li>
						<li><a href="index">About</a></li>
					</center>
				</ul>
			</div>
			<center>
				<h>mau5ite!</h>
			</center>
			<br>
		');
	}
	
	public static function cover()
	{
		print('
			<div id="cover" style="background-color: #232323; position: absolute; width: 100%; height: 100%;">
				<img id="cover_img" hidden="" style="position: absolute;" src="//'.SITE_PORTAL_URL.'/static/img/spinner.gif" width="10%">
			</div>
		');
	}
	
	public static function head()
	{
		print('
			<link rel="stylesheet" href="//'.SITE_PORTAL_URL.'/static/css/materialize.min.css">
			<link rel="stylesheet" href="//'.SITE_PORTAL_URL.'/static/css/global.php">
			
			<meta charset="UTF-8">
			<meta name="viewport" content="user-scalable=no, width=device-width">
		');
	}
	
	public static function footer()
	{
		print('			
			<div class="container">
				<a href="#a_menu_li">Go to top</a>
			</div>
		');
	}
}