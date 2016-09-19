<?php

/**
 * The common one
 */
function include_ordinary_loggin_form() {

    echo "<form action='index.php' method='post' id ='loginForm'>
               <p id='logginP'>
                   <label for='username'>Username:</label>
                   <input type=text name='username' id='username'><br>
                   <label for='pass'>Password:</label>
                   <input type=password name='pass' id='pass'><br><br>
                   <input type='submit' value='send' id='submit'>
              </p>
              
            </form>";
}

function include_form_diff_examples() {
    echo "<form action='index.php' method='get' id ='admin_edit_1'>

               <p>
                   <label for='title'>Title:</label>
                   <input type='text' value='$title' name='btitle' id='title'><br><br>
                   <label>Content:</label>
                   <textarea rows='7' cols='35' name='bcontent'>$content</textarea><br><br><br><br><br><br><br><br>
                   <label for='picture'>Image:</label>
                   <input type='text' value='$image' name='bimage' id='picture'><br><br>
                   <label for='author'>Author:</label>
                   <input type='text' value='$author' name='bauthor' id='author'><br><br>
                   <input type='hidden' name='link' value='bloggC'>
                   <input type='submit' value='Create' id='submit2'>
              </p>

            </form>";

    //=========================================================================
}

/**
 * Gives a DB conenction instance
 * This function is extracted, to be able to change the connection
 * credentials from only one place
 * @return <type>
 */
function getDBConnectionInstance() {
//    $c = mysqli_connect('student.ts.mah.se', 'testanv','qwerty','da123avt10') or die("ERROR: Cannot connect.");
    $c = mysqli_connect('isql01.mah.se', 'm09k2847', 'ab1985', 'm09k2847_privat'); // or die("ERROR: Cannot connect.");
//    $c = mysqli_connect('localhost', '', '', 'test');
    //OBS do not forget to change the connection string in testDBConnection()!!!
    return $c;
}

/**
 * Generates a ResulSet basing on the querry sent
 * @param <type> $querry
 * @return <type>
 */
function getResultSetDB($querry) {

    $c = getDBConnectionInstance();

    //make a querry
    $result_set = mysqli_query($c, $querry);
    return $result_set;
}

/**
 * to be used with non select statements
 */
function executeQuery($querry) {
    $c = getDBConnectionInstance();
    mysqli_query($c, $querry);
}

function testDBConnection() {

//     $c = mysqli_connect('localhost', '', '', 'test');
    $c = mysqli_connect('isql01.mah.se', 'm09k2847', 'ab1985', 'm09k2847_privat');

    if ($c) {
        return true;
    } else {
        echo"<div id='dbConnFailed'></div>";
        return false;
    }
}

/**
 * 
 * @param type $mode
 * @param type $blog_id
 */
function bloggAddNewOrUpdate($mode, $blog_id) {
    $title = htmlspecialchars($_GET['btitle']);
    $content = htmlspecialchars($_GET['bcontent']);
    $image = htmlspecialchars($_GET['bimage']);
    $author = htmlspecialchars($_GET['bauthor']);

    $query = "";
    if ($mode == 'edit') {
        $query = "update blogposts set title='$title', content='$content', image='$image',
        author='$author' where id=$blog_id";
    } else if ($mode == 'new') {
        $query = "insert into blogposts (title,content,author,image) values
            ('$title','$content','$author','$image')";
    }

//    echo "mode  = $mode";
//    echo "query = $query";
    executeQuery($query);
}

/**
 * Add the user name when logged in
 */
function addNameWhanLoggedIn() {
    if ($_SESSION['loggin'] == "1" || $_SESSION['loggin'] == "3") {
        $username = $_SESSION['name'];
        $id = "a1";
        echo "<div id=" . $id . "><h5>User: $username</h5></div>";
    }
}

/**
 * Checks if querry returns something, if returns it
 * means that the user exists, if not, dont exist.
 * @param <type> $username
 * @param <type> $password
 * @param <type> $tabelName - name of the table in DataBase
 * @return <type>
 */
function userExistsInDB($username, $password, $tabelName) {

    $query = "SELECT * FROM $tabelName WHERE name='" . addslashes($username) . "'
         AND password='" . $password . "';";

    //    echo "$query";

    $c = getDBConnectionInstance();

    mysqli_query($c, $query);

    if (mysqli_query($c, $query)) {
        return true;
    } else {
        return false;
    }
}

function deleteAllUsers() {
    $c = getDBConnectionInstance();
    $query = "delete * from users";
    mysqli_query($c, $query);
}

function deleteGivenUser($username) {
    $user_name = addslashes($username);
    executeQuery("delete from users where name = '$user_name'");
}

function list_users_debugg() {
    $result_set = getResultSetDB("select name,id,password from users order by name");
    echo "<h2>Existing users:</h2>";
    echo"<ol>";
    while ($row = mysqli_fetch_array($result_set)) {
        $id = $row['id'];
        echo"<li>" . $row['name'] . "-----" . $row['password'] . "  <a href='index.php?link=adminC&amp;id=$id'>delete</a> ";
    }
    echo "</ol>";
}

function modifyColumnCharLength() {
    executeQuery("ALTER TABLE `users` MODIFY COLUMN `password` VARCHAR(120)");
}

/**
 *
 * @param <type> $result
 */
function display_db_result_in_an_ordered_list($result) {
    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<ul>";
        $counter = 1;

        //loops through the columns
        while (isset($row["$counter"])) {

//            if ($counter == 2 || $counter == 5 || $counter == 1) {
            echo "<li>" . $row[$counter];
//            }
            $counter++;
        }

        echo "</ul>";
        echo "<hr>";
    }
}

/**
 *
 * @param <type> $result
 */
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

/**
 *
 * @param <type> $result
 */
function display_db_result_set_in_html_table_2($result) {

    echo "<table id='table' border='1'>";

    //loops through the rows
    while ($row = mysqli_fetch_array($result)) {

        //new row
        echo "<tr>";
        $counter = 0;

        //loops through the columns
        while (isset($row["$counter"])) {
            //new column
            if ($counter != 0) {
                if ($counter == 5) {
                    $ref = $row[$counter];
                    echo "<td>";
                    echo "<a href ='" . $ref . "'>$ref</a>";
                    echo "</td>";
                } else {
                    echo "<td>" . $row[$counter] . "</td>";
                }
            }

            $counter++;
        }
        echo "</tr>";
    }
    echo "</table>";
}

//*****************************Failure Processing*******************************
/**
 *
 * @param <type> $type
 * @param <type> $msg
 * @param <type> $file
 * @param <type> $line
 * @param <type> $context 
 */
function errorHandlerDebugg($type, $msg, $file, $line, $context) {

    echo "<h1>OPS Det blev ett fel!</h1>";
    echo "Ett fel uppstod vid korningen av denna webbaplikationen. Var god kontakta <a
         href=mailto:webmaster@minsida.natt>webmaster</a> for att rapportera detta fel.";
    echo "<p>";
    echo "Har visas ytterligare information om felet:";
    echo "<hr><pre>";
    echo "Fel kod: $type<br>";
    echo "Fel meddelande: $msg<br>";
    echo "Skript-namn och radnummer dar felet troligen uppkom: $file:$line<br>";
    echo "</pre></p><hr>";
}

/**
 *
 * @param <type> $type
 * @param <type> $msg
 * @param <type> $file
 * @param <type> $line
 * @param <type> $context
 */
function errorHandler($type, $msg, $file, $line, $context) {

//    echo "<h1>OPS Det blev ett fel!</h1>";
    echo "Ett fel uppstod vid korningen av denna webbaplikationen. Var god kontakta <a
         href=mailto:webmaster@minsida.natt>webmaster</a> for att rapportera detta fel.<br><br>";
//    echo "<p>";
//    echo "Har visas ytterligare information om felet:";
//    echo "<hr><pre>";
    echo "Fel kod: $type<br>";

    if ($type == '2') {
        echo "Vi har för närvarande tekniska problem, var god och försök igen senare.";
    }
//    echo "Fel meddelande: $msg<br>";
//    echo "Skript-namn och radnummer dar felet troligen uppkom: $file:$line<br>";
//    echo "</pre></p><hr>";
    echo "<hr><br>";
}

/**
 * 
 */
function setErrorHandler() {
    set_error_handler("errorHandler");
}

//******************************************************************************
/**
 * Some things needs to be done only once therefore
 * this function could be used
 * @return <type>
 */
function is_first_visit() {
    if (isset($_SESSION['first_visit']) == false) {
        $_SESSION['first_visit'] = 1;
        return true;
    } else {
        return false;
    }
}

//*****************************************************************************
?>




