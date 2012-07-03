<html>
<head>
  <title>Openday Entry Results</title>
</head>
<body>
<h1>Openday Entry Results</h1>
<?php
  // create short variable names
  $title=$_POST['title'];
  $code=$_POST['code'];
  $description=$_POST['description'];

  if (!$title || !$code || !$description)
  {
     echo 'You have not entered all the required details.<br />'
          .'Please go back and try again.';
     exit;
  }
  if (!get_magic_quotes_gpc())
  {
    $title = addslashes($title);
    $code = addslashes($code);
    $description = addslashes($description);
  }

include('db_connect.php');

  $sql = "insert into admin values 
            (NULL, '".$title."', '".$code."', '".$description."')"; 

		$result = mysql_query($sql, $db);

		if (!$result) {
			echo 'DB error, could not query the DB: ' . mysql_error();
			exit;
		} else {
			echo 'The openday has been inserted into database.';
		}
		
  	mysql_close($db);
?>
</body>
</html>
