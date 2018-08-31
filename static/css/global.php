<?php

require_once('../../m5_bind.php');

header('Content-Type: text/css', true);

print('
	body 
	{
		background-image: url(//'. SITE_PORTAL_URL .'/static/img/imagedoc-darknoise.png);
	}

	header
	{
		box-shadow: 0px 8px 8px #8a1f1f;
		border-radius: 10px;
		
	}

	header h
	{
		color: yellow;
		font-family: "Chiller", "Sans-Serif";
		font-size: 70px;
		color: #ffff00;
		line-height: 0.3;
	}
	
	footer
	{
		box-shadow: 0px -8px 8px #8a1f1f;
		box-radius: 10px;
		text-align: right;
		margin-top: 25px;
	}

	a
	{
		background-color: #1f1f1f;
		color: forestgreen;
		line-height: 1.5;
		font-size: 20px;
		font-family: "Comic Sans MS", cursive, sans-serif;
		text-decoration: none;
	}

	a:hover
	{
		background-color: black;
		/*text-decoration: underline;*/
		color: red;
	}

	a:active
	{
		color: brown;
	}
	
	.menu_li
	{
		position: absolute;
	}
	
	.menu_li a
	{
		font-size: 15px; !important
	}
	
	.why_mau5
	{
		color: #ff96a8;
		font-size: 20px;
		font-family: "Comic Sans MS", cursive, sans-serif;
	}
');