<html>
<head>
  <title>Book-O-Rama Catalog Search</title>
</head>

<body>
  <h1>Book-O-Rama Catalog Search</h1>

  <form action="results.php" method="post">
    Choose Search Type:<br />
    <select name="searchtype">
			<option class="select" value="all">Show All</option>
	  	<option value="id">id</option>
      <option value="title">title</option>
      <option value="code">short code</option>
    </select>
    <br />
    Enter Search Term:<br />
    <input name="searchterm" type="text">
    <br />
	<input type="submit" value="Search">
  </form>

</body>
</html>