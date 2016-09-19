<?php
 session_start();
 $_SESSION['namn'] = "Sten Sture den äldre"
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Test för sessionsvariabler</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <h1>Du har nu satt en sessionsvariabel.</h1>
  <p>
    Surfa till sidan <a href="session_ex2.php">session_ex2.php</a>.
  </p>
</body>
</html>

