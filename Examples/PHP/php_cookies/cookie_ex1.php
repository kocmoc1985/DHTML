<?php
$cookie_name = "test";
$cookie_value = "Sten Sture den äldre";
$cookie_expire = time() + 86400;
setcookie($cookie_name, $cookie_value, $cookie_expire);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Test för att sätta kakor</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <h1>Du har nu satt en kaka på din dator.</h1>
        <p>
            Surfa till sidan <a href="cookie_ex2.php">cookie_ex2.php</a>.
        </p>
    </body>
</html>

