<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php

        function read_word() {
            $handle = fopen("visits.txt", "r");
            if ($handle) {
                $ord = fread($handle, 1024);
                fclose($handle);
                return $ord;
            }
            return 1; //om vi nu inte skulle kunna �ppna filen
        }

        function write_word($ord) {
            $handle = fopen("visits.txt", "w");
            if ($handle) {
                fwrite($handle, $ord);
                fclose($handle);
            }
        }

        $visits = read_word();
        $visits++;
        echo "<p>Antal bes�k p� denna sida �r nu $visits stycken.</p>";
        write_word($visits);
        ?>
    </body>
</html>