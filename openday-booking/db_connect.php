<?php
$root = $_SERVER['DOCUMENT_ROOT']; 
if (strpos($root, 'MAMP')) { // we are working locally

	if (!$db = mysql_connect('localhost', 'root', 'root')) {
		echo 'Could not connect: ' . mysql_error();
		exit;
	}
	
	if (!mysql_select_db('opendays')) {
		echo 'could not select database';
		exit;
	}

} else { // we are working remotely

	if (!$db = mysql_connect('web-ip1.arts.local', 'commdevforms', 'tac8zesk')) {
		echo 'Could not connect: ' . mysql_error();
		exit;
	}
	
	if (!mysql_select_db('commdevforms')) {
		echo 'could not select database';
		exit;
	}
	
}	
?>