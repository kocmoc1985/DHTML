<?php
 session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>H�mta sessionsvariabel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <h1>S� �verf�r man variabler via sessionsvariabler.</h1>
  <div>
  <?php
    if(isset($_SESSION['namn']))
      $text = "V�lkommen " . $_SESSION['namn'] . "!<br>";
    else
      $text = "Det �r fel <br>";
    echo $text;
  ?>
  </div>
</body>
</html>

