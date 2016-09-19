<?php

/**
 * Gives a DB conenction instance
 * This function is extracted, to be able to change the connection
 * credentials from only one place
 * @return <type>
 */
function getDBConnectionInstance() {
    //$c = return mysqli_connect('student.ts.mah.se', 'testanv', 'qwerty', 'da123avt10') or die("ERROR: Cannot connect.");
    $c = mysqli_connect('localhost', '', '', 'test') or die("ERROR: Cannot connect.");
    return $c;
}

function prepare_statement($db_connection) {

    /* check connection */
    if (mysqli_connect_errno ()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $name = "eivert";

    /* create a prepared statement */
    if ($stmt = $db_connection->prepare("SELECT password FROM users WHERE name=?")) {

        /* bind parameters for markers */
        $stmt->bind_param("s", $name);

        //to bind several params do
//         $stmt->bind_param("ss", $username, $password);

        /* execute query */
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($password);

        /* fetch value */
        $stmt->fetch();

    printf("%s is in district %s\n", $name, $password);

//        echo "$password";

        /* close statement */
        $stmt->close();
    }

    /* close connection */
    $db_connection->close();
}

prepare_statement(getDBConnectionInstance());
?>