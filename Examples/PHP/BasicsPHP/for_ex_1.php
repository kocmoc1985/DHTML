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
for ($raknare=1; $raknare<=10; $raknare++){
  echo("$raknare gånger 6 är ".($raknare*6)."<br>\n"); //\n gör att det blir en ny rad i html-koden så denna blir mer lättläst om man vill läsa denna efter att den genererats
}
?>
</p>
</body>
</html>
