<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>Hur är läget?<br>
<?php
$laeget = "bra"; //kunde också varit en fråga till användaren
//$laeget = "superbra";
//$laeget = "annat";
if ($laeget=="superbra"){
  echo('Läget är superbra!');
}
elseif ($laeget=="bra"){
  echo('Läget är bra!');
}
else{
  echo('Läget är kasst!');
}
?>
</p>
</body>
</html>


