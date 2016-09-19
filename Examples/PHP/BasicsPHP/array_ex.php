<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <?php
    $myArray1 = array(1, 2, "värde");
    echo("<p>Arrayen myArray1:<br>");
    print_r ($myArray1); // slå upp funktionen print_r på php.net
    echo("</p>");

    $myArray2 = array("firstname" => "Testa", "lastname" => "Provsson");
    echo("<p>Arrayen myArray2:<br>");
    print_r ($myArray2);
    echo("</p>");
    
    $myArray3 = array();
    $myArray3[1] = "värde i index 1";
    $myArray3['nbr'] = 3;
    echo("<p>Arrayen myArray3:<br>");
    print_r ($myArray3);
    echo("</p>");

    $myArray4['names'][0] = "Testa";
    $myArray4['names'][1] = "Kolla";
    echo("<p>Arrayen myArray4:<br>");
    print_r ($myArray4);
    echo("</p>");

  ?>
</body>
</html>



