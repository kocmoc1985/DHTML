<?php
/*
  du måste ha en fil med namnet file.txt i
  samma katalog som denna fil för att exemplet skall fungera
 */

function write_word($ord) {
    $handle = fopen("file.txt", 'w'); //befintligt innehåll försvinner
    if ($handle) {
        fwrite($handle, $ord);
        fclose($handle);
        return true;
    }
    return false;
}

function read_word() {
    $handle = fopen("file.txt", 'r');
    if ($handle) {
        $ord = fread($handle, 1024);
        fclose($handle);
        return $ord;
    }
    return false;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php
        if (isset($_POST['input'])) {
            $res = write_word($_POST['input']);
        }
        ?>
        <form action="fil_ex1.php" method="POST">
            <p>
                Text du vill skriva till filen:<input type="text" name="input">
                <input type="submit" value="Skriv till fil">
            </p>
        </form>
        <p>
            <?php
            $read = read_word();
            if ($read !== false) {
                echo "Läst (max 1024 bytes) från filen:<br>";
                echo $read;
            } else {
                echo "Kunde inte läsa från filen.";
            }
            ?>
        </p>
    </body>
</html>