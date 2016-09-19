<?php
require_once ("Counter4.inc");
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
echo "Demonstration of the use of cloning<br>";
// some things with weight
$boxes = new Counter4;

echo "There are {$boxes->nbrUnits()} boxes<br>";
echo "Adding some items to the instance and then cloning it.<br>";
$boxes->add(3);
//clone the object
$bags = clone $boxes;
echo "There are {$boxes->nbrUnits()} boxes<br>";
echo "There are {$bags->nbrUnits()} bags<br>";
echo "Adding some items to the two instances:<br>";
$boxes->add(2);
$bags->add(5);
echo "There are {$boxes->nbrUnits()} boxes<br>";
echo "There are {$bags->nbrUnits()} bags<br>";
$items = Counter4::nbrTotalItems();
echo "The total number of items are {$items} items<br>";

echo "The total weight of the boxes are ".$boxes->totalWeight()." tons<br>";
echo "The total weight of the bags are ".$bags->totalWeight()." kg<br>";
?>
</p>
</body>
</html>