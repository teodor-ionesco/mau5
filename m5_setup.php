<?php

if(file_exists('m5_setup_data.php'))
{
	file_put_contents('m5_lib/config.php', file_get_contents('m5_setup_data.php'));

	unlink('m5_setup_data.php');
	
	die('Setup is done.');
}
else
{
	die("m5_setup_data.php does not exist.");
}