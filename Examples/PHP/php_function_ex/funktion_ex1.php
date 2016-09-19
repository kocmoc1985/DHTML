<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
function skrivhej() {
 echo "<h2>Hej!</h2>"; //detta utförs varje gång funktionen anropas
}
skrivhej(); //anrop till funktionen skrivhej()
skrivhej(); //anrop till funktionen skrivhej()
//vi har nu skrivit hej som en heading av storlek 2, två gånger
?>

</body>
</html>
