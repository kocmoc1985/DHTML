<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>Hur är läget idag?<br>
<?php
$laeget = "bra"; //kunde också varit en fråga till användaren
//$laeget = "superbra";
//$laeget = "annat";
switch ($laeget){
  case "superbra": echo ("Läget är superbra!");
    break;
  case "bra": echo ("Läget är bra!");
    break;
  default: echo ("Läget är kasst!");
    break;
}
?>
</p>
</body>
</html>
