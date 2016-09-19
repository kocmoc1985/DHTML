<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <p>
            <?
        //pr�va att ange n�got nonsens som funktionsnamn som
        //testas och se hur den alternativa satsen skrivs ut
            if (function_exists("rand")) {
                $tarning = rand(1, 6);
                echo "Din t�rning stannade p� $tarning";
            } else {
                echo "Nope, kan inte slumpa saker h�r inte";
            }
            ?>
        </p>
    </body>
</html>
