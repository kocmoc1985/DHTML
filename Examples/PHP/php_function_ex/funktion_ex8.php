<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php

        function testfunktion($inargument1, $inargument2=1) {
            echo ("<h$inargument2>" . $inargument1 . "</h$inargument2>");
        }

        testfunktion('C-vitaminer', 2);
        testfunktion('är', 4);
        testfunktion('bra att ata');
        ?>

    </body>
</html>
