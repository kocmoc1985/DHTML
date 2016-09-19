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

            function increment2(&$invarde) {//observera &-tecknet framfor variabeln
                $invarde +=2;
            }

            $startnummer = 4;
            echo("Startnummer fore funktionsanrop: <h1>$startnummer</h1><br>");
            increment2($startnummer);
            echo("Startnummer efter funktionsanrop: $startnummer");
            ?>
        </p>
    </body>
</html>
