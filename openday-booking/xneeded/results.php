<html>
<head>
  <title>Openday Search Results</title>
</head>
<body>
<h1>Openday Search Results</h1>
<?php
  // create short variable names
	$searchtype=$_POST['searchtype'];
	$searchterm=$_POST['searchterm'];

  $searchterm= trim($searchterm);	
	
  if (!$searchtype)
  {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }
  
  if (!get_magic_quotes_gpc())
  {
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

  include('db_connect.php');

	if ($searchtype == 'all') {
		$result = mysql_query("select * from admin");
	} else {
  	$result = mysql_query("select * from admin where ".$searchtype." like '%".$searchterm."%'");
	}
	
  $num_results = mysql_num_rows($result);

  echo '<p>Number of books found: '.$num_results.'</p>';

  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysql_fetch_assoc($result);
     echo '<p><strong>'.($i+1).'. Title: ';
     echo stripslashes($row['title']);
     echo '</strong><br />Code: ';
     echo stripslashes($row['code']);
     echo '<br />Description: ';
     echo stripslashes($row['description']);
     echo '<br />ID Number: ';
     echo stripslashes($row['id']);
     echo '</p>';
  }
  
  mysql_free_result($db);
  mysql_close($db);

?>
</body>
</html>
