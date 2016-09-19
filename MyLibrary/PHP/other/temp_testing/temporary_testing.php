<?php

check_input(getDBConnectionInstance(), "\Is your name O'reilly?");

//function get_nr_of_next_auto_increment($table_name) {
//    $result = mysql_query("SHOW TABLE STATUS LIKE '$table_name'");
//    $row = mysql_fetch_array($result);
//    $nextId = $row['Auto_increment'];
//    mysql_free_result($result);
//    return $nextId;
//}

function check_input($con, $value) {
    // deletes html tags
    $value = strip_tags($value);

    // Stripslashes, deletes "\"
    if (get_magic_quotes_gpc()) {
        $value = stripslashes($value);
    }
    // Quote if not a number
    // Note if you use insert statement as below use "mysqli_real_escape_string($con, $value)" without "'"
    //$q = sprintf("insert into users values('','%s','%s','%s');", $username, $password, $role);
    if (!is_numeric($value)) {
        $value = "'" . mysqli_real_escape_string($con, $value) . "'";
    }
    echo $value;
}

//==============================================================================

function executeSelectQuery($querry) {
    $c = getDBConnectionInstance();
    $result_set = mysqli_query($c, $querry);
    mysqli_close($c);
    return $result_set;
}

function executeQuery($querry) {
    $c = getDBConnectionInstance();
    mysqli_query($c, $querry);
    mysqli_close($c);
}

function getDBConnectionInstance() {
    $c = mysqli_connect('localhost', 'root', '', 'vedalife');
    return $c;
}

?>
