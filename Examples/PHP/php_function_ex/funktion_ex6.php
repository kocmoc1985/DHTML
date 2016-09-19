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

            function upprakning() {
                static $iterationer = 0;
                $iterationer++;
                echo("Denna uppr�kning har k�rt $iterationer g�ng(er)<br>");
            }

            upprakning();
            upprakning();
            upprakning();
            ?>
        </p>
    </body>
</html>
