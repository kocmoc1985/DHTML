<?php

//make a connection
//$c = mysqli_connect('student.ts.mah.se', 'testanv', 'qwerty', 'da123avt10') or die("ERROR: Cannot connect.");
$c = mysqli_connect('localhost', '', '', 'test') or die("ERROR: Cannot connect.");

if (!$c) {
    die('Could not connect: ' . mysql_error());
} else {
    echo "Connected!";
}

//make a querry
$result_set = mysqli_query($c, "SELECT * FROM events");

if ($result_set) {
    $nr_result_sets = mysqli_num_rows($result_set);
    echo "nr result_sets: $nr_result_sets";


// go throuh the result_set and display manually given rows
//    while ($row = mysqli_fetch_array($result_set)) {
//        echo "<br />";
//        echo $row['1'] . " " . $row['2'] . " " . $row['3'] . " " . $row['4'];
//        echo "<br />";
//    }
    
    display_db_result_set_in_html_table($result_set);

//    display_db_result_in_an_ordered_list($result);

    /* free result_set set */
    mysqli_free_result($result_set);
} else {
    echo "Error: something wrong with the querry";
}


//close connection
mysqli_close($c);
//
?>

<?php

function display_db_result_in_an_ordered_list($result) {
    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<ol>";
        $counter = 1;

        //loops through the columns
        while (isset($row["$counter"])) {

            //new column
            echo "<li>" . $row[$counter];
            $counter++;
        }
        echo "</ol>";
    }
}

?>


<?php

function display_db_result_set_in_html_table($result) {

    echo "<table border='1'>";

    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<tr>";
        $counter = 1;

        //loops through the columns
        while (isset($row["$counter"])) {

            //new column
            echo "<td>" . $row[$counter] . "</td>";
            $counter++;
        }
        echo "</tr>";
    }

    echo "</table>";
}

?>



