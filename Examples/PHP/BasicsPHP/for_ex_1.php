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
  echo("$raknare g�nger 6 �r ".($raknare*6)."<br>\n"); //\n g�r att det blir en ny rad i html-koden s� denna blir mer l�ttl�st om man vill l�sa denna efter att den genererats
}
?>
</p>
</body>
</html>
