<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>
<?php
$a = 3;
$b = 6;
$svar = ($a > $b) ? "$a �r st�rre �n $b<br>" : "$b �r st�rre �n $a<br>";
echo $svar;
/*vi �ndrar v�rdena p� variablerna*/
$a = 56;
$b = 17;
$svar = ($a > $b) ? "$a �r st�rre �n $b<br>" : "$b �r st�rre �n $a<br>";
echo $svar;
?>
</p>
</body>
</html>
