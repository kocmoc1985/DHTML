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
    <input type=text name=fornamn value=\"skriv ditt f�rnamn h�r\">
    <input type=text name=efternamn value=\"skriv ditt efternamn h�r\">
    <input type=submit>
  </div>
  </form>";
  }
  else{
  	echo "<div>Namnet �r: ".$_POST['fornamn']." ".$_POST['efternamn']."</div>";
  }
?>
</body>
</html>
