<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>

        
        <?php
        $upload_dir = "./test/";
        $errortext = "";
        if (isset($_GET['action']) && $_GET['action'] == "delete" && file_exists($_GET['file'])) {
            unlink($_GET['file']);
            echo "<p>Du har tagit bort filen " . $_GET['file'] . "</p>";
        }
        /*
          Kolla om en fil har postats, i sa fall sparar
          vi den i katalogen $upload_dir
          userfile kommer fran inmatningsf�ltet av typen file
         */
        if (isset($_FILES["userfile"])) {
            if ($_FILES["userfile"]["name"] != "") { //kontrollera tomma strangen
                copy($_FILES["userfile"]["tmp_name"], $upload_dir . $_FILES["userfile"]["name"]);
                //kopiera filen fran cachen till angivet namn
            } else {
                $errortext = "<p style=\"color: red\">Du maste ange en giltig sokvag!</p>\n";
            }
        }
        ?>

        
        <form method="POST" action="<?php $PHP_SELF?>" enctype="multipart/form-data" name="fileform">
            <p>
                Valj fil att ladda upp: <input type="file" name="userfile" >
                <input type="submit" value="Ladda upp">
            </p>
        </form>

        
        <?php
        if ($handle = opendir($upload_dir)) {
            echo "<p>Katalogens handtag: $handle<br>\n";
            echo "Inneholl:<br>\n";
            while (false !== ($file = readdir($handle))) {
                if ("file" == filetype($upload_dir . $file)) { //listar endast filer
                    echo "$file ";
                    echo "<a href=\"upload_ex2.php?action=delete&amp;file=$upload_dir$file\"> ta bort</a><br>\n";
                }
            }
            echo "</p>";
            closedir($handle);
        } else {
            echo "<p>Kunde inte �ppna katalogen.</p>";
        }
        ?>
    </body>
</html>

