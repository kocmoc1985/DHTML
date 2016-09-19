<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>Räknar 100 delat med en räknare:<br>
<?php
//byt mellan de olika startvärdena
$raknare = 0;
//$raknare = 1;
for ($raknare; $raknare<=10; $raknare++){
  if ($raknare == 0){
  	echo ("Kan inte utföra division med 0.");
    break;
    //continue; //testa skillnaden mellan continue och break med startvärdet 0
  }
  $temp=100/$raknare;
  echo("100 delat med med $raknare är $temp<br>\n");
}
?>
</p>
</body>
</html>
