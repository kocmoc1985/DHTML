<?php
//include a class deklaration of class Counter.
require_once ("Counter.inc"); //mer om att inkludera filer kommer i senare studiemateriel
//in other aspects the same as counter_class1.php
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
            echo "Demonstration of the use of a class that is included<br>";
// create some things with weight
            $boxes = new Counter;
            $bags = new Counter;
            echo "There have been created two instances of the class Counter.
      One instance representing boxes and one representing bags.<br>";

            echo "There are {$boxes->units} boxes<br>";
            echo "There are {$bags->units} bags<br>";
            echo " <br>";
            echo "We then add some boxes and bags to each instance.<br>";
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