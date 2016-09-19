<?php
/* Du kan beh�va sl�nga tidigare cookies f�r att det ska fungera */
if(!isset($_COOKIE['test'])){
  $cookie_name = "test";
  $cookie_value = "Sten Sture den �ldre";
  $cookie_expire = time()+86400;
  setcookie($cookie_name, $cookie_value, $cookie_expire);
  $text_heading = "Du har nu satt en kaka p� din dator.";
  $text_cookie = "";
}
else{
  $text_heading = "S� �verf�r man variabler via cookies.";
  if(isset($_COOKIE['test']))
  {
    $text_cookie = "V�lkommen " . $_COOKIE['test'] . "!<br>";
  }
  else
  {
    $text_cookie = "Det �r fel <br>";
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Test f�r att s�tta kakor</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <h1><?php echo $text_heading;?></h1>
  <div><?php echo $text_cookie;?></div>
</body>
</html>


