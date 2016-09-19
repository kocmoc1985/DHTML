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

            function addition($invar1, $invar2) {
                $resultat = $invar1 + $invar2;
                return $resultat;
            }

            $tal1 = 4;
            $tal2 = 5;
            $summa = addition($tal1, $tal2);
            echo "$tal1+$tal2=$summa";
            ?>
        </p>
    </body>
</html>
