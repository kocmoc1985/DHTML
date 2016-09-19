<?php
/* Du kan behöva slänga tidigare cookies för att det ska fungera */
if(!isset($_COOKIE['test'])){
  $cookie_name = "test";
  $cookie_value = "Sten Sture den äldre";
  $cookie_expire = time()+86400;
  setcookie($cookie_name, $cookie_value, $cookie_expire);
  $text_heading = "Du har nu satt en kaka på din dator.";
  $text_cookie = "";
}
else{
  $text_heading = "Så överför man variabler via cookies.";
  if(isset($_COOKIE['test']))
  {
    $text_cookie = "Välkommen " . $_COOKIE['test'] . "!<br>";
  }
  else
  {
    $text_cookie = "Det är fel <br>";
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Test för att sätta kakor</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <h1><?php echo $text_heading;?></h1>
  <div><?php echo $text_cookie;?></div>
</body>
</html>


