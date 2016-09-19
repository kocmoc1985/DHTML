<?php

function getDBConnectionInstance() {
//    $c = mysqli_connect('student.ts.mah.se', 'testanv','qwerty','da123avt10') or die("ERROR: Cannot connect.");
    //Note if you use "or die" option it means that the execution will stop if the connection failes
//    $c = mysqli_connect('mixcont.com.mysql', 'mixcont_com', 'Sjb5MVmC', 'mixcont_com') or die("ERROR: Cannot connect.");
    $c = mysqli_connect('mixcont.com.mysql', 'mixcont_com', 'Sjb5MVmC', 'mixcont_com');
//    $c = mysqli_connect('localhost', '', '', 'test');
    return $c;
}

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

/**
 * 
 * @param type $query
 * @return boolean
 */
function get_if_requested_parameter_exists_in_db($query) {
    if (check_db_connection_b()) {
        $result_set = executeSelectQuery($query); //db cinnection ok

        if (mysqli_num_rows($result_set) > 0) {
            return true;
        } else {
            return false;
        }
    }
}

/**
 * Loops through all of the db entries, and checks 
 * if the input text/string contains a pattern of any entry listed
 * in the database
 * @param type $text
 * @param type $query
 * @return boolean
 */
function get_if_an_entry_from_db_matches_given_text($text, $query, $column_index) {
    if (check_db_connection_b()) {
        $result_set = executeSelectQuery($query); //db cinnection ok
        while ($row = mysqli_fetch_array($result_set)) {
            if (strstr(strtolower($text), strtolower($row[$column_index]))) {
                return true;
            }
        }
        return false;
    }
}

/**
 * Gets the nr of next auto incremented value
 * @param String $table_name
 * @return int
 */
function get_nr_of_next_auto_increment($table_name) {
    $querry = "SHOW TABLE STATUS LIKE '$table_name'";
    $result_set = executeSelectQuery($querry);
    $row = mysqli_fetch_array($result_set);
    $nextId = $row['Auto_increment'];
    mysqli_free_result($result_set);
    echo $nextId;
}

/**
 * A very easy way of building tableHeaders
 * @tested
 * @param type $table_name
 */
function build_table_headers($table_name) {
    $q = "show columns from $table_name";
    $result = executeSelectQuery($q);

    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<th>$row[0]</th>";
    }
    echo "</tr>";
}

function check_db_connection_b() {
    $check_1 = mysqli_connect_errno(getDBConnectionInstance()); // 0 means no failure, error code otherwise
    if ($check_1 == 0) {
        return true;
    } else {
        return false;
    }
}

function check_db_connection_examples() {
    $con = getDBConnectionInstance();
    $check_1 = mysqli_connect_errno($con); // 0 means no failure, error code otherwise
    //$con=mysqli_connect("localhost","wrong_user","my_password","my_db");
    // Check connection
    //if (!$con)
    //{
    //die("Connection error: " . mysqli_connect_error();
    //}
    $check_2 = mysqli_connect_error(); // NULL means no failure, string with error msg otherwise
}

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
    return $value;
}

/**
 * Note for "md5" crypting algorithm the 
 * "salt" should be 12 chars long and start with "$1$" and end with "$".
 * Salt example for md5 = '$1$kocmoc47$'
 * @param type $password
 * @return type
 */
function crypt_md5($password) {
    $salt = '$1$kocmoc47$';
    return crypt($password, $salt);
}

//*****************************************************************************

function basic_example_of_db_usage_select_type() {
    $q = "select * from visitors";
    $result_set = executeSelectQuery($q);

    echo '<div id="main">';
    while ($row = mysqli_fetch_array($result_set)) {
        echo '<div class="entry">';
        $ip = $row['ip'];
        echo "<h3>$ip</h3>";
        echo '</div>';
    }
    echo '</div>';
}

function basic_example_of_db_usage_insert_type() {
//    $q = "insert into comments values ('$ip','$date','$link','$name','$rubrik','$comment')";
    $q = sprintf("insert into comments values(%s,%s,%s,%s,%s,%s)", $ip, $date, $link, $name, $rubrik, $comment);
    executeQuery($q);
}

/**
 * count nr rows in the result set.
 * This one is very useful for validating if
 * "entry" is present in DB
 * @param type $result_set
 * @return type
 */
function get_nr_rows_in_resultset($result_set) {
    return mysqli_num_rows($result_set);
}

function modifyColumnCharLength($table, $column, $nrchars) {
//    executeQuery("ALTER TABLE `$table` MODIFY COLUMN `$column` VARCHAR(120)");
    executeQuery("alter table " . $table . "modify column" . $column . "varchar(" . $nrchars . ")");
}

?>
