<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>Hur �r l�get idag?<br>
<?php
$laeget = "bra"; //kunde ocks� varit en fr�ga till anv�ndaren
//$laeget = "superbra";
//$laeget = "annat";
switch ($laeget){
  case "superbra": echo ("L�get �r superbra!");
    break;
  case "bra": echo ("L�get �r bra!");
    break;
  default: echo ("L�get �r kasst!");
    break;
}
?>
</p>
</body>
</html>
