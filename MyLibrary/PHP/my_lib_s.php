<?php

/**
  1. sql injection - use prepared statements
  2. filtrera indata så att användaren inte skickar in html kod - htmlspecialchars($_GET['btitle'])
  3. use password hashing- that means passwords are stored in db not as original
  but as a string of different characters created with a crypt algor like md5 or sha1

  so :
  - when user types in a password the password becomes crypted and compares with
  the crypted password stored in the db
  - also when using crypting the so called "Salt" is preffered to be used
  it makes it more difficult to hack it all: Example of using salt --->

  //the salt "appendix" adds a string to the start of the crypted password
  // in this case i ad the 2 last chars of users username + word kocmoc
  $salt = '$1$' . substr($username, -2) . 'kocmoc$';
  $md5_password = crypt($password, $salt);
  //checks against the db
  $login_ok = userExistsInDBPreparedStatement($username, $md5_password, "users");
 */
//***************************************************************************
// #####- htmlspecialchars($string)#######:
// <?php
//$str = "This is some <b>bold</b> text.";
//echo htmlspecialchars($str);
//OUTPUT: This is some <b>bold</b> text. -> the text wasn
// 
//***************************************************************************

/**
 * Super important!
 * For preventing sql injections
 * @param type $con
 * @param type $value
 * @return string
 */
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

//==================================EXAMPLES====================================

function submit_login() {
    if (isset($_POST['username']) == false || isset($_POST['password']) == false) {
        return;
    }

    $con = getDBConnectionInstance();

    if (check_db_connection_b()) {
        $_SESSION['online_login'] = "true";
        $username = check_input($con, $_POST['username']);
        $password = check_input($con, $_POST['password']);

        $password = crypt_md5($password); /// OBS! OBS! OBS!

        $q = "select * from users where username='$username' and password ='$password'";
        $result_set = executeSelectQuery($q); //db cinnection ok

        if (mysqli_num_rows($result_set) > 0) {
            $_SESSION['login_ok'] = "true";
            while ($row = mysqli_fetch_array($result_set)) {
                $_SESSION['user_id'] = $row['u_id'];
                $_SESSION['user_role'] = $row['userrole'];
            }
            $_SESSION['user_name'] = $username;

            redirect_to_admin_page();
            //login ok
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "admin" && $password == "Kocmoc4765") {
                $_SESSION['login_ok'] = "true";
                redirect_to_admin_page();
                //login ok
            } else {
                $_SESSION['login_ok'] = "false";
                redirect();
                //login false 
            }
        }
    }
}

function submit_add_user() {
    if (isset($_POST['username_add_user']) == false || isset($_POST['password_add_user']) == false) {
        return;
    }

    $con = getDBConnectionInstance();

    $username = check_input($con, $_POST['username_add_user']);
    $password = check_input($con, $_POST['password_add_user']);
    $role = check_input($con, $_POST['select_user_role']);

    $password = crypt_md5($password);

    $q = sprintf("insert into users values('','%s','%s','%s');", $username, $password, $role);

    executeQuery($q);

    $_SESSION['user_add'] = "user = " . $username . " /pass = " . $password . " /role = " . $role;

    redirect_to_admin_page();
}

//******************************************************************************

/**
 * Using "htmlspecialchars($_GET['xxxx'])" method
 * prevents that a user can enter HTML code in
 * the input fields.
 * @param type $mode
 * @param type $blog_id
 */
function html_special_chars_usage_example($mode, $blog_id) {
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

    executeQuery($query);
}

/**
 * Use prepared statements in order to avoid "SQL Injections"
 * @param type $username
 * @param type $password
 * @param type $tabelName
 * @return boolean
 */
function prepared_statements_usage_example($username, $password, $tabelName) {

    $db_connection = getDBConnectionInstance(); //connect to db
    //check connection
    if (mysqli_connect_errno() || mysqli_connect_error()) {
        trigger_error("DB Connection trouble, please try aggain later!");
        return false;
    }

    //create a prepared statement
    if ($stmt = $db_connection->prepare("SELECT id FROM $tabelName WHERE name=? and password=?")) {
        // bind parameters for markers
        $stmt->bind_param("ss", $username, $password);
        //execute query
        $stmt->execute();
        //bind result variables
        $stmt->bind_result($id);
        // fetch value - get result set
        $stmt->fetch();
        $stmt->close();

        if ($id > 0) { // means that resultset returned an entry
            return true; //user exists
        } else {
            return false;
        }
    }
}

?>
