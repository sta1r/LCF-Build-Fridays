<html>
<head>
  <title>LCF Opendays</title>
</head>

<body>
  <h1>New Openday Entry</h1>

  <form action="insert-openday.php" method="post">
    <table border="0">
      <tr>
        <td>Openday title</td>
         <td><input type="text" name="title" maxlength="13" size="13"></td>
      </tr>
      <tr>
        <td>Short code e.g. "access"</td>
        <td> <input type="text" name="code" maxlength="30" size="30"></td>
      </tr>
      <tr>
        <td>Dates / description</td>
        <td> <input type="text" name="description" maxlength="60" size="30"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Submit"></td>
      </tr>
    </table>
  </form>
</body>
</html>
