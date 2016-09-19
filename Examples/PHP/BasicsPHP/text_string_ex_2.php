<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <div>
  <?php
    $namn = "Erik";
    echo 'Hej '.$namn.'!<br>'; //konkatenerat textssträngar och variabel
    echo "Hej $namn!<br>";  //variabeln inkluderad i textsträngen och tolkas
    echo "Hej ".$namn."!<br>"; //konkatenerat textssträngar och variabel
  ?>
  </div>
</body>
</html>




