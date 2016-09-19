<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php
        if ($handle = opendir('test')) {
            echo "<p>Katalogens handtag: $handle<br>\n";
            echo "Inneh�ll:<br>\n";

            /* !== testar f�r samma typ ut�ver bara likhet.
              Om vi bara hade testat med != s� hade inneh�ll i katalogen
              vars namn motsvarat false (exempelvis namnet 0)
              utv�rderats till false och avbrutit loopen.
             */
            while (false !== ($file = readdir($handle))) {
                echo "$file<br>\n";
            }
            echo "</p>";
            closedir($handle);
            /*
              Om du i inneh�llslistningen ser en punkt . och tv� punkter ..
              s� representerar dessa den aktuella katalogen (.), det vill s�ga katalogen test
              och f�r�ldern till den aktuella katalogen (..), katalogen som
              katalogen test ligger i.
             */
        } else {
            echo "<p>Kunde inte �ppna katalogen. Kontrollera att det finns en katalog med namnet test.</p>";
        }
        ?>

    </body>
</html>
