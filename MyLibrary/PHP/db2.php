<?php

function modifyColumnCharLength($table, $column, $nrchars) {
//    executeQuery("ALTER TABLE `$table` MODIFY COLUMN `$column` VARCHAR(120)");
    executeQuery("alter table " . $table . "modify column" . $column . "varchar(" . $nrchars . ")");
}

/**
 * Automatically builds the table. Delete action implemented.
 * @param type $css_id - id name of element used for CSS
 * @param type $title - Table title
 * @param type $sql_table - Name of the sql tale
 * @param type $delete_action_name - Give name for the delete action, ex: delete_user
 * @param type $auto_increment_id_name - The name of the field in database
 */
function display_table_data_automatically_1($css_id, $title, $sql_table, $delete_action_name, $auto_increment_id_name) {
    echo "<div id='$css_id'>";
    echo "<h2>$title</h2>";
    echo "<table>";

    build_table_headers($sql_table);

    $q = "select * from " . $sql_table;
    $result = executeSelectQuery($q);

    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<tr>";
        $counter = 0;

        //loops through the columns
        while (isset($row["$counter"])) {
            //new column
            echo "<td>$row[$counter]</td>";
            $counter++;
        }

        echo "<td>";
        $value = $row[$auto_increment_id_name];
        echo "<a class='delete' href='index.php?link=_admin&amp;action=$delete_action_name&amp;value=$value'>delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
}

function show_sql_tables_in_html_table($css_id) {
    echo "<div id='$css_id'>";
    echo "<h2>Listing SQL tables</h2>";
    echo "<table>";

    echo "<tr>";
    echo"<th>Table</th>";
    echo"<th>Nr records</th>";
    echo "</tr>";

    $q = "show tables";
    $result = executeSelectQuery($q);

    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<tr>";
        $counter = 0;

        //loops through the columns
        while (isset($row["$counter"])) {
            //new column
            $table_name = $row[$counter];
            echo "<td>$table_name</td>";
            $counter++;
        }

        $result_2 = executeSelectQuery("select count(*) from " . $table_name);
        $row_2 = mysqli_fetch_array($result_2);

        $nr_records = $row_2[0];

        echo "<td>";
        echo $nr_records;
        echo "</td>";

        echo "<td>";
        echo "<a class='delete' href='index.php?link=_admin&amp;action=show_table&amp;value=$table_name'>show table</a>";
        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
}

?>
