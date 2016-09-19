<?php
//declare the class before session starts
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
        <p>
            <?php
            if (!isset($_SESSION['boxes'])) {
                echo("Boxes not set as session varaible.");
            } else {
                $boxes = $_SESSION['boxes'];
                echo "Retrieved data from objekt:<br>";
                echo "There are {$boxes->nbrUnits()} boxes<br>";
                echo "The total weight of the boxes are " . $boxes->totalWeight() . " tons<br>";
                echo '<a href="session_class1.php">Set a new number of boxes</a>';
            }
            ?>
        </p>
    </body>
</html>
