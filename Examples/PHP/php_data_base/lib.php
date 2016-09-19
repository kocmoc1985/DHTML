



<?php
///////////////////////////////////DB Functions\\\\\\\\\\\\\\\\\\\\\\\\\\\\

function getResultSetDB($querry) {
    //make a connection
       $c = mysqli_connect('student.ts.mah.se', 'testanv', 'qwerty', 'da123avt10') or die("ERROR: Cannot connect.");
//    $c = mysqli_connect('localhost', '', '', 'test') or die("ERROR: Cannot connect.");

    if (!$c) {
        die('Could not connect: ' . mysql_error());
    } else {
//        echo "Connected!";
    }

    //make a querry
    $result_set = mysqli_query($c, $querry);
    return $result_set;
}

function display_db_result_in_an_ordered_list($result) {
    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<ul>";
        $counter = 1;

        //loops through the columns
        while (isset($row["$counter"])) {

            if ($counter == 2 || $counter == 5 || $counter == 1) {
                echo "<li>" . $row[$counter];
            }
            $counter++;
        }

        echo "</ul>";
        echo "<hr>";
    }
}

function addNextArtist($result) {

    $row = mysqli_fetch_array($result);

    if (isset($row['datum'])) {
        echo "<div id='next'>";
        echo "<h1>Next:<h1>";
        echo "<h2>" . $row['datum'] . "</h2>";
        echo "<h2>" . $row['artist'] . "</h2>";
    }
}

function display_db_result_set_in_html_table($result) {

    echo "<table id='table' border='1'>";

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

