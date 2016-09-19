<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php

        function read_text_and_format() {
            $handle = fopen("tiddelipom.txt", "r");
            if ($handle) {
                while (!feof($handle)) {
                    $text .= fgets($handle, 1024) . "<br>";
                }
                fclose($handle);
                return $text;
            }
            return "ingen text";
        }

        function read_text() {
            $handle = fopen("tiddelipom.txt", "r");
            if ($handle) {
                $text = fread($handle, 1024);
                fclose($handle);
                return $text;
            }
            return "ingen text";
        }

        function write_text($text) {
            $handle = fopen("tiddelipom.txt", "w");
            if ($handle) {
                fwrite($handle, $text);
                fclose($handle);
            }
        }

//        hier is the main algor
        if (isset($_POST['from'])) {
            $text = read_text();
            $new_text = str_ireplace($_POST['from'], $_POST['to'], $text);
            write_text($new_text);
            echo "<p>andringar:<br> alla <i>" . $_POST['from'] . "</i> byttes till <i>" . $_POST['to'] . "</i></p>";
        }

        $text = "";
        $text = read_text_and_format();
        echo "<p>Inlast text:<br>$text</p>";
        ?>
        <form name="change_text" method="POST" action="<?php $PHP_SELF ?>" >
            <div>
                Andra alla <input type="text" name="from" value="">
                till <input type="text" name="to" value="">
                <input type="submit" value="andra">
            </div>
        </form>

    </body>
</html>