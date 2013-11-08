<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>admin</title>
	<meta name="author" content="alastair mucklow">

</head>
<body>

<?php if (isset($_POST['submit'])) { 
	$title = $_POST['title'];
	$text = $_POST['text'];	
	
	echo $text.$title; 
	
	include('db_connect.php');
	
	// enter values into the database
	$sql = "insert into admin values 
			(NULL, '".$title."', '".$text."')";

	$result = mysql_query($sql, $db);

	if (!$result) {
		echo 'DB error, could not query the DB: ' . mysql_error();
		exit;
	} 

	mysql_close($db);
}?>


<form action="" method="post">
	<label for="title">Title</label>
	<input type="text" id="title" name="title" class="textfield required" /><br />       
	
	<label for="text">Text</label>	
	<textarea rows="5" cols="20" name="text"></textarea>
	<input type="submit" name="submit" value=" Submit " class="submit" />
</form>



</body>
</html>
