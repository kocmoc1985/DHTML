<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">




<!--This part is executed on the server side -->

<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <div>
            <?php
            import_request_variables("gp", "rvar_");
           
            echo "Namnet är: " . $_GET['fName'] . "  " . $_GET['eName'];
            ?>
        </div>
    </body>
</html>




