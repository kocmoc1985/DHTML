<?php
require_once ("Counter2.inc");
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
            echo "Demonstration of the use of a class that has a construct<br>";
// some things with weight
//using a construkt to set a different initial number of units
            $boxes = new Counter2(3);
            $bags = new Counter2;

            echo "There are {$boxes->units} boxes<br>";
            echo "There are {$bags->units} bags<br>";
            echo "Adding some items to the instances:<br>";
            $boxes->add(3);
            $bags->add(5);
            echo "There are now {$boxes->units} boxes<br>";
            echo "There are now {$bags->units} bags<br>";

            echo "The total weight of the boxes are " . $boxes->totalWeight() . " tons<br>";
            echo "The total weight of the bags are " . $bags->totalWeight() . " kg<br>";
            ?>
        </p>
    </body>
</html>