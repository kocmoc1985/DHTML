<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>Hur �r l�get?<br>
<?php
$laeget = "bra"; //kunde ocks� varit en fr�ga till anv�ndaren
//$laeget = "superbra";
//$laeget = "annat";
if ($laeget=="superbra"){
  echo('L�get �r superbra!');
}
elseif ($laeget=="bra"){
  echo('L�get �r bra!');
}
else{
  echo('L�get �r kasst!');
}
?>
</p>
</body>
</html>


