<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Set Test Cookie</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <h1>S� �verf�r man variabler via cookies.</h1>
        <div>
            <?php
            if (isset($_COOKIE['test']))
                $text = "V�lkommen " . $_COOKIE['test'] . "!<br>";
            else
                $text = "Det �r fel <br>";
            echo $text;
            ?>
        </div>
    </body>
</html>

