<?php
require_once ("Counter3.inc");
session_start();
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
        if (!isset($_POST['number'])) {
            echo('<form action="session_class1.php" method="POST"><p>');
            echo("State number of boxes:<input type=text name=number> and press Enter.");
            echo("</p></form>");
        } else {
            $boxes = new Counter3($_POST['number']);
            echo "<p>There are {$boxes->nbrUnits()} boxes<br>";
            echo "The total weight of the boxes are " . $boxes->totalWeight() . " tons<br>";
            $_SESSION['boxes'] = $boxes;
            echo '<a href="session_class2.php">Read the object from a different file</a></p>';
        }
        ?>
    </body>
</html>
