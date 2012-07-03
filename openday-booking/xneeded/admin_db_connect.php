<?php
	if (!$db = mysql_connect('localhost', 'root', 'root')) {
		echo 'Could not connect: ' . mysql_error();
		exit;
	}
	
	if (!mysql_select_db('opendays')) {
		echo 'could not select database';
		exit;
	}
?>