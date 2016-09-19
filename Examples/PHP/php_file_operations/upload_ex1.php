<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php
        if (isset($_FILES["userfile"]) && ($_FILES["userfile"]["name"] != "")) {

            echo("<p>Filen laddades upp med det temorara namnet: " . $_FILES["userfile"]["tmp_name"] . "<br>");

            echo("Filnamnet pa den lokala maskinen: " . $_FILES["userfile"]["name"] . "<br>");

            move_uploaded_file($_FILES["userfile"]["tmp_name"], "./test/" . $_FILES["userfile"]["name"]);

            echo ("Kopierade filen med filnamnet: " . $_FILES["userfile"]["tmp_name"] .
            " till en fil med filnamnet " . $_FILES["userfile"]["name"] . "<br>");

            echo("Filens sokvag relativt detta script ar test/" . $_FILES["userfile"]["name"] . "<br>");

            echo("<a href='test/" . $_FILES["userfile"]["name"] . "'>Las den uppladdade filen fran servern</a></p>");
        } else {
            echo("<p>Inget filnamn fanns annu</p>");
        }
        ?>


        <form method="POST" action="<?php $PHP_SELF ?>" enctype="multipart/form-data" name="fileform">
            <p>Ladda upp fil:
                
                <input type="file" name="userfile" ><br>

                <input type="submit" value="ladda upp">
            </p>
        </form>
    </body>
</html>