<?php
define("GREETING", "Hej på dej!");
define("NBR_GREETINGS", 3);

function printGreeting() {
  for($i=0; $i<NBR_GREETINGS; $i++){
   echo "<h2>GREETING</h2>"; 
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php
printGreeting(); //anrop till funktionen skrivhej()
?>

</body>
</html>
