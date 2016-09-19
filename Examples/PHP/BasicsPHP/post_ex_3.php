<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <?php
  if(!isset($_POST['fornamn'])){
  echo "<form method=\"post\" action=post_ex_3.php>
  <div>
    <input type=text name=fornamn value=\"skriv ditt förnamn här\">
    <input type=text name=efternamn value=\"skriv ditt efternamn här\">
    <input type=submit>
  </div>
  </form>";
  }
  else{
  	echo "<div>Namnet är: ".$_POST['fornamn']." ".$_POST['efternamn']."</div>";
  }
?>
</body>
</html>
