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
						<li><a href="//'.SITE_HOBBY_URL.'/tracks">Tracks</a></li>
						<li><a href="//'.SITE_HOBBY_URL.'/memes">Memes</a></li>
						<li><a href="//'.SITE_HOBBY_URL.'/index">About</a></li>
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
			<div id="cover" style="background-color: #232323; position: absolute; width: 100%; height: 1000%;">
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
	
	public static function javascript()
	{
		print("
			<script src=\"//".SITE_PORTAL_URL."/static/js/jquery.min.js\"></script>
			<script>
				$(document).ready(function() {
					$('#cover_img').removeAttr('hidden');
					$('#cover_img').css('left', ($(window).width()/2 - $('#cover_img').width()/2)+ 'px');
					$('#cover_img').css('top', ($(window).height()/2 - $('#cover_img').height()/2)+ 'px');
				});

				$(window).on('load', function() {
					$('#cover').attr('hidden', '');
				});
				
				$(window).resize(function() {
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
			<script src=\"//".SITE_PORTAL_URL ."/static/js/materialize.min.js\"></script>
		");
	}
}