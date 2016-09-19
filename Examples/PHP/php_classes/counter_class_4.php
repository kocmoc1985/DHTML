<?php
require_once ("Counter3.inc");
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
            echo "Demonstration of the use of modifiers<br>";
// some things with weight
            $boxes = new Counter3;
            $bags = new Counter3;

//member variable units are  private so a method is used to retrieve the value
            echo "There are {$boxes->nbrUnits()} boxes<br>";
            echo "There are {$bags->nbrUnits()} bags<br>";

//Assign a varaible the total number of units that have been set
// it is not possible to call a static finction inside a string
            $items = Counter3::nbrTotalItems();
            echo "The total number of items are $items items<br>";
            echo "Adding some items to the two instances:<br>";
            $boxes->add(3);
            $bags->add(5);
            echo "There are now {$boxes->nbrUnits()} boxes<br>";
            echo "There are now {$bags->nbrUnits()} bags<br>";
            $items = Counter3::nbrTotalItems();
            echo "The total number of items are now $items items<br>";

            echo "The total weight of the boxes are " . $boxes->totalWeight() . " tons<br>";
            echo "The total weight of the bags are " . $bags->totalWeight() . " kg<br>";
            ?>
        </p>
    </body>
</html>
