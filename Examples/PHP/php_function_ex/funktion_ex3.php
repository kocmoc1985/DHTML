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

//H�r kan det vara bra att deklarera vad funktionen g�r
//d�rf�r skriver vi h�r: Funktionen returnerar summan
//av tv� tal. Inparametrarnas funktion, kan ocks� beskrivas h�r.
            function summa($nummer1, $nummer2) {
                $temp = ($nummer1 + $nummer2);
                return ($temp);
            }

            echo summa(1, 3) . "<br>";
            $tal = summa(3, 6);
            echo "3+6=$tal";
            ?>
        </p>
    </body>
</html>
