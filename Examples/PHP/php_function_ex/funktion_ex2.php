<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table border="1">
<?php
/* Funktion som skapar en tabellrad med två celler.
   Innehållet i den första cellen blir vad som finns i 
   Parametern $kolumn1 och motsvarande för den andra cellen. */
function skapatabellrad( $kolumn1, $kolumn2) {
 print "<tr><td>$kolumn1</td><td>$kolumn2</td></tr>";
}
for ( $i=1; $i<=4; $i++ ) {
  $textvansterkol="rad $i kolumn 1";
  $texthogerkol="rad $i kolumn 2";
  skapatabellrad($textvansterkol, $texthogerkol);
}
?>
</table>
</body>
</html>
