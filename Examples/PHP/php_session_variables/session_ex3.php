<?php
  session_start();
  if(!isset($_SESSION['namn'])){
    $_SESSION['namn'] = "Sten Sture den äldre";
    $title = "Test för sessionsvariabler";
	$text_heading = "Du har nu satt en sessionsvariabel.";
    $text = "Ladda nu om sidan.";
  }
  else{
    $title = "Hämta sessionsvariabel";
    $text_heading = "Så överför man variabler via sessionsvariabler.";
    if(isset($_SESSION['namn']))
      $text = "Välkommen " . $_SESSION['namn'] . "!<br>";
    else
      $text = "Det är fel <br>";
 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <h1><?php echo $text_heading; ?></h1>
  <p>
    <?php echo $text; ?>
  </p>
</body>
</html>



