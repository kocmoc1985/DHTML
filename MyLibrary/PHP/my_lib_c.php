<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>

        <?php

        /**
         * SUPER SUPER IMPORTANT!!!!!
         * The function wrights to C:\xampp\apache\logs
         */
        function DEBUGG() {
            error_log("Message to display");
        }

        /**
         * This is SUPER IMPORTANT
         * @return type
         */
        function php_dom_set_attribute_example() {
            $q = "select * from videos where video_id = '$id'";

            $result_set = executeSelectQuery($q);

            $video_code = "";
            while ($row = mysqli_fetch_array($result_set)) {
                $video_code = $row['code'];
            }

            $html = $video_code;
            $dom = new DOMDocument;
            $dom->loadHTML($html);
            $iframe = $dom->getElementsByTagName('iframe')->item(0);

            $iframe->setAttribute("width", "500");
            $iframe->setAttribute("height", "375");

            $html = $dom->saveHTML();
            return $html;
        }

        /**
         * This is IMPORTANT!
         */
        function set_php_ini_file() {
            ini_set('session.save_path', ".");
            //
            ini_get('session.save_path');
        }

        /**
         * SUPER IMPORTANT!
         * Pass variables from php to js
         * Do following:
         * 1. create css rule
         * 2. use php code snippet to add hidden value
         * 3. now use javaScript to get the text/innerHtml from the "hiddenField" 
         */
        function pass_variable_to_java_script($value) {
            //(1)CSS Rule 
//        #hiddenField{
//        visibility: hidden;
//        display: inline-block;
//        position: absolute;
//        left: 0;
//        }
            //================================
            //(2) code snippet
            echo "<div id='hiddenField'>";
            echo "$value";
            echo "</div>";
        }

        /**
         * ONE OF THE MOST IMPORTANT METHODS!!
         * @param type $fileName
         */
        function include_($fileName) {
            echo '<div id="navigationBar">';
            include "content/$fileName.php";
            echo '</div>';
        }

        /**
         * YOU MUST HAVE THIS IN THE BEGGINING TO BE ABLE 
         * to call functions from other .php files
         */
        function include_once_() {
            include_once ("php/GlobalProperties.php");
        }

        /**
         * VERY IMPORTANT
         * Look at this construction!
         * @param type $ref
         */
        function dynamicly_set_link($ref) {
            echo "<a href ='" . $ref . "'>$ref</a>"; // - to dynamicly inset the link!!!
            //or the same but without additional "'" chars, this might also be needed
            echo "<a href =" . $ref . ">$ref</a>"; // - to dynamicly inset the link!!!
        }

        function dynamicly_set_var_in_html() {
            //NOTE in this example is HTML CODE!!!
            //Pay attention to value=....... php echo.....
            /* <input type="hidden" name="upload_dir" value="<?php echo $UPLOAD_DIR ?>"> */
        }

        /**
         * Very important
         * Stop execution of the code
         * @tag stop,break,exit
         */
        function stop_executing_code() {
            exit();
        }

        /**
         * 
         */
        function json_basics_1() {
            $location = file_get_contents('http://freegeoip.net/json/' . $_SERVER['REMOTE_ADDR']);
            $json_a = json_decode($location, true);
            $ip = $json_a['ip'];
        }

        function json_create_json_string_encode() {
            $json_arr = array(
                'date_time' => date_get_date_default(),
                'ip' => getIP(),
                'country_code' => "RUS",
                'file_and_path' => "aaaa/bbb",
            );

            $json_string = json_encode($json_arr);
            return $json_string;
        }

        function json_decode_json_string() {
            $encoded_json_string = json_create_json_string_encode();
            $string_decoded_to_array = (array) json_decode($encoded_json_string);
            return $string_decoded_to_array;
        }

        /**
         * Writes to file an array which contains encoded json entries like:
         * {"date_time":"00.00.00","ip":"192.168.0.1","country_code":"RUS","file_and_path":"aaa"}
         * @param type $array - array containing the json encoded strings
         * @param type $file_path - the path to write to
         */
        function json_write_array_with_json_encoded_strings_to_file($array, $file_path) {
            $to_record = "";
            //
            foreach ($array as $encoded_json_string) {
                //
                //Building the string to be recorded to file
                $to_record .= $encoded_json_string . "\n";
            }
            //Write to file
            file_put_contents($file_path, $to_record);
        }

        /**
         * Automaticly builds the table by reading a file containing
         * encoded json strings, decodes them and inserts in table.
         * Shows the latest first!
         * @param type $path
         * @param type $css_id
         * @param type $max_records_to_show
         */
        function show_json_in_table($path, $css_id, $max_records_to_show) {
            echo "<div id='$css_id'>";
            echo "<h3>Showing log: $path</h3>";
            echo "<table>";

            //    echo "<tr>";
            //    echo"<th>Table</th>";
            //    echo"<th>Nr records</th>";
            //    echo "</tr>";
            //=====
            //In this section the file is read and placed into array
            //which is reversed at the end of the section - this
            //to be able to have the latest records first
            $arr = array();

            $file = fopen($path, "r");
            while (!feof($file)) {
                $act_line = fgets($file);
                array_push($arr, $act_line);
            }

            $arr_2 = array_reverse($arr);
            fclose($file);
            //=====
            //In this section each line is decoded into array/hashmap
            $records_shown = 0;
            foreach ($arr_2 as $act_line) {
                if ($records_shown >= ($max_records_to_show + 1)) {
                    break;
                }
                //===
                $json_arr = (array) json_decode($act_line);
                echo "<tr>";
                foreach ($json_arr as $key => $value) {
                    echo "<td>$value</td>";
                }
                $records_shown++;
                echo "</tr>";
            }

            //=====

            echo "</table>";
            echo "</div>";
        }

        /**
         * SUPER IMPORTANT
         * Reads the content of a file into "String"
         */
        function file_get_content_of_remote_or_local_file() {
            $content = file_get_contents("sess_74gdkiln2uo4hut37hsgteu5v7");
            //OR
            $content = file_get_contents('http://freegeoip.net/json/' . $_SERVER['REMOTE_ADDR']);
        }

        /**
         * 
         */
        function file_read_write_to_file() {
            $file = 'people.txt';
            // Open the file to get existing content
            $current = file_get_contents($file);
            // Append a new person to the file
            $current .= "John Smith\n";
            // Write the contents back to the file
            file_put_contents($file, $current);
        }

        function file_read_file_line_by_line() {
            $file = fopen("test.txt", "r");
            while (!feof($file)) {
                echo fgets($file) . "<br />";
            }
            fclose($file);
        }

        /**
         * Good to use in connection with "include"
         * @param type $filename
         * @return type
         */
        function file_exists($filename) {
            return file_exists($filename);
        }

        /**
         * @tags delete file, deletefile, delete_file
         * @param type $path
         * @return boolean
         */
        function file_delete_file($path) {
            if (!unlink($path)) {
                return true;
            } else {
                return false;
            }
        }

        /**
         * Recursive funciton for deleteing the directory
         * and all it's subfolders & files
         * @param type $dirPath
         */
        function file_delete_dir($dirPath) {
            if (is_dir($dirPath)) {
                $objects = scandir($dirPath);
                foreach ($objects as $object) {
                    if ($object != "." && $object != "..") {
                        if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
                            file_delete_dir($dirPath . DIRECTORY_SEPARATOR . $object);
                        } else {
                            unlink($dirPath . DIRECTORY_SEPARATOR . $object);
                        }
                    }
                }
                reset($objects);
                rmdir($dirPath);
            }
        }

        /**
         * 
         * @param type $file_name_with_extension - the file name with extension extracted from "$src_path"
         * @param type $src_path - the source path & filename with ext. of the file to be moved
         * @param type $target_path - the target path where to move the file
         */
        function move_file($file_name_with_extension, $src_path, $target_path) {
            $ready_path_with_file_name = $target_path . "/" . $file_name_with_extension;
            rename($src_path, $ready_path_with_file_name);
        }

        /**
         * 
         * @param type $pathname
         */
        function file_create_dir($pathname) {
            //0777 is folder rights
            mkdir($pathname, 0777);
        }

        function file_create_dir_if_not_exist($path) {
            if (file_exists($path) == false) {
                mkdir($path, 0777);
            }
        }

        
        function file_create_file_if_not_exist($file_path) {
            if (file_exists($file_path) == false) {
                fopen($file_path, "w");
            }
        }

        /**
         * Uses the same method as for file!
         * @param type $path_to_dir
         * @return type
         */
        function file_directory_exists($path_to_dir) {
            return file_exists($path_to_dir);
        }

        /**
         * Checks if the "file" is a directory
         * @param type $pathname
         * @return type
         */
        function file_is_directory($pathname) {
            return is_dir($pathname);
        }

        /**
         * List files & directories inside a folder
         * For the "root path" you can use "." instead of $path_to_dir
         * @param type $path_to_dir
         */
        function file_list_directory($path_to_dir) {
            if ($handle = opendir($path_to_dir)) {

                while (false !== ($entry = readdir($handle))) {

                    echo "$entry <br>";
                }
                closedir($handle);
            }
        }

        /**
         * RECURSIVE FUNCTION!
         * This function automaticly finds the file path.
         * OBS!OBS! Note the recursion depth is 1 -> content -> folderX.
         * So it will not find a file if the file is in a folder inside folderX.
         * @param type $dir
         * @param type $file_to_find
         */
        function file_find_path($dir, $file_to_find) {
            if ($handle = opendir($dir)) {
                while (false !== ($entry = readdir($handle))) {
                    if (is_dir("content/" . $entry) && $entry != "." && $entry != "..") {
                        file_find_path("content/" . $entry, $file_to_find);
                    } else if ($entry == $file_to_find . ".php") {
                        $_SESSION['path'] = $dir . "/";
                    }
                }
                closedir($handle);
            }
        }

        /**
         * @SUPERIMPORTAN-SUPERIMPORTANT
         * 1 = _files/_upload_test ---> the inparameter '$link'
         * 2 = /customers/b/6/0/mixcont.com/httpd.www/_files/_upload_test ---> func. "realpath" returns
         * 3 = _upload_test
         * @IMPORTANT
         * @param type $link
         * @return type
         */
        function file_get_current_dir($link) {
            //Let's say that:
            //$link = _files/_upload_test
            //
            // returns: /customers/b/6/0/mixcont.com/httpd.www/_files/_upload_test
            $real_path = realpath($link);
            //
            //returns: _upload_test
            $current_dir = file_get_dir_name_only_by_link($real_path);
            //
            return $current_dir;
        }

        /**
         * 
         * @param String $file_name_and_extension
         * @return type
         */
        function file_get_extension($file_name_and_extension) {
            return pathinfo($file_name_and_extension, PATHINFO_EXTENSION);
        }

        /**
         * 
         * @param type $link
         * @return type
         */
        function file_get_dir_name_only_by_link($link) {
            $arr = explode("/", $link);
            $file_name = $arr[sizeof($arr) - 1];
            return $file_name;
        }

        /**
         * Super IMPORTANT!! 
         * Gets only the name of the current file without path
         * @NOTE This one must be placed in Document where you call it from!
         * @NOTE For local host use "\\" for usage at provider use "/"
         * @return type
         */
        function file_get_current_file_name_without_path() {
            $arr = explode("\\", __FILE__);
            return $arr[sizeof($arr) - 1];
        }

        /**
         * Gets only the name of the current file without path
         * @NOTE This one must be placed in Document where you call it from!
         * @NOTE For local host use "\\" for usage at provider use "/"
         * @return type
         */
        function file_get_current_file_name_without_path_and_extension() {
            $arr = explode("\\", __FILE__);
            $file_name = $arr[sizeof($arr) - 1];
            return substr($file_name, 0, strlen($file_name) - 4);
        }

        /**
         * Get current directory of a file
         * This one must be placed in Document where you call it from!!!
         * @return system
         */
        function file_get_current_file_dir() {
            return __DIR__;
        }

        /**
         * Get current directory of a file
         * @NOTE This one must be placed in Document where you call it from!
         * @NOTE For local host use "\\" for usage at provider use "/"
         * @return system
         */
        function file_get_previous_dir() {
            $arr = explode("\\", __DIR__);
            $act_dir = $arr[sizeof($arr) - 1];
            $prev_dir = str_replace($act_dir, "", __DIR__);
            return substr($prev_dir, 0, strlen($prev_dir) - 1);
        }

        /**
         * Get current directory of a file
         * This one must be placed in Document where you call it from!!!
         * @return system
         */
        function file_get_current_file_dir_and_file_name_with_ext() {
            return __FILE__;
        }

        /**
         * **************************OBS*****
         */

        /**
         * OBS!!!
         * session_start() should be 100% first of all in the very
         * top of the document even before setting the "!DOCTYPE"
         */
        function session_set_session_variable() {
            session_start();
            $_SESSION['namn'] = "Sten Sture den äldre";
        }

        function session_unset_session_variable() {
            unset($_SESSION['namn']);
        }

        /**
         * The session date is stored in a file
         * which can be red/decoaded
         */
        function session_read_session_file() {
            session_start();
            $content = file_get_contents("sess_74gdkiln2uo4hut37hsgteu5v7");
            echo "location = $content";
            session_decode($content);
//        print_r($_SESSION);
            $lang = $_SESSION['sprak']; // it's ment the session file contains a variable named "sprak"
            echo "lang=" . $lang;
        }

        /**
         * IMPORTANT
         */
        function session_check_if_session_variable_is_set() {
            if (session_id() == '') {
                // session isn't started
            }
        }

        /**
         * For php version > than 5.4 (not really sure)
         * I haven't used this so far.
         */
        function session_check_if_session_variable_is_set_2() {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }

        function session_variable_usage() {
            if (isset($_SESSION['namn']))
                $text = "Välkommen " . $_SESSION['namn'] . "!<br>";
            else
                $text = "Det är fel <br>";
            echo $text;
        }

        //====================================================================

        /**
         * VERY IMPORTANT!!
         * pay attention at "&amp;" which = "&"
         */
        function link_with_multiple_parameters() {
            $subkategori = "news";
            echo "<div class= 'sidebarlinkSub'>";
            echo "<a href='index.php?link=content&amp;val=$subkategori'>$subkategori</a>";
            echo "</div> ";
        }

        /**
         * OBS! OBS! Dont forget to implement "ob_start()" method at the very
         * top of the submit.php file to be able to redirect with newer php versions.
         * 
         * OBS! -> you must have "exit()" after redirecting! 
         * 
         * Different examples of redirecting!
         */
        function redirect() {
            $link = $_SESSION['link_session'];
            header("Location: index.php?link=$link");
            exit();
            //=====================================
            $link = $_SESSION['link_session'];
            header("Location: index.php?link=$link#comment");
            exit();
            //=====================================
            header("Location: index.php?link=_admin");
            exit();
        }

        function get_() {
            echo "Namnet ar: {$_GET['x']} {$_GET['y']}";

            if (isset($_GET['x'])) {
                //do something
            }
        }

        /**
         * Checks if function exists
         * @param String $functionName - write it as String without "()"
         * @return boolean
         */
        function getIfFunctionExists($functionName) {
            if (function_exists($functionName)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        function tryCatchExample() {
            try {
                //mysqli_query($c, $querry);
            } catch (Exception $e) {
                echo "uppload to db failed: $e";
            }
        }

        /**
         * Get ip of the visitor
         * @return type
         */
        function getIP() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                return $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                return $_SERVER['REMOTE_ADDR'];
            }
        }

        function date_get_date_default() {
            date_default_timezone_set('Europe/Stockholm');
            return date("Y-m-d H:i:s");
        }

        /**
         * Get additonal client info 
         * returns = Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0 
         * @return type
         */
        function getClientInfo() {
            return $_SERVER['HTTP_USER_AGENT'];
        }

        /**
         * !!!!!!!DATE!!!!!
         * @return type
         */
        function getDate() {
            date_default_timezone_set('Europe/Stockholm'); //this is important, wrong time otherwise
            return date("Y-m-d H:i:s");
        }

        /**
         * Set cookie
         * @param Int $cookieName
         * @param string $cookie_value
         * @param Int $seconds_to_expire_after
         */
        function cookie_setCookie($cookieName, $cookieValue, $seconds_to_expire_after) {
//            Left as a reminder
//            $cookie_name = "test";
//            $cookie_value = "Sten Sture den ?ldre";
//            $cookie_expire = time() + 86400;

            $cookie_expire = time() + $seconds_to_expire_after;
            setcookie($cookieName, $cookieValue, $cookie_expire);
        }

        /**
         * Get a value defined in cookie
         * @param type $cookieName
         */
        function cookie_getValueFromCookie($cookieName) {
            ### get a value from cookie
            if (isset($_COOKIE[$cookieName]))
                return $_COOKIE[$cookieName];
            else
                return "";
        }

        //======================================================================
        /**
         * Converts String to int
         * @param type $string - the number as String to be convertes to int
         * @return type
         */
        function parse_int($string) {
            return (int) preg_replace('/[^0-9]/', '', $string);
        }

        //======================================================================

        /**
         * @tags build string, add to string
         * @param type $str_to_add_to
         * @param type $str_to_add
         * @return type
         */
        function string_addToString($str_to_add_to, $str_to_add) {
            $str_to_add_to .= $str_to_add;
            return $str_to_add_to;
        }

        function string_contains($str, $regex) {
            return strstr($str, $regex);
        }

        function string_trim($string) {
            return str_replace(' ', '', $string);
        }

        function string_toLowerCase($str) {
            return strtolower($str);
        }

        /**
         * Each word in the string will be returned in upper case.
         * The string "mixing control" will return "Mixing Control"
         * @param type $str_to_process
         * @return type
         */
        function string_firsLetterToUpperCase($str_to_process) {
            return ucwords($str_to_process);
        }

        /**
         * 
         * @param type $str_to_split
         * @param type $regex
         * @return type - Array
         */
        function string_split_string($str_to_split, $regex) {
            return explode($regex, $str_to_split);
        }

        /**
         * Replace something in String
         * @param type $str_to_replace
         * @param type $strToReplaceWith
         * @param type $str_in_which_to_replcace
         * @return type
         */
        function string_replace($str_to_replace, $strToReplaceWith, $str_in_which_to_replcace) {
            return str_replace($str_to_replace, $strToReplaceWith, $str_in_which_to_replcace);
        }

        /**
         * 
         */
        function string_substring() {
            substr("2013-01-31", 0, 7); // 2013-01
            substr("2013-01-31", -2); //31
            substr("2013-01-31", 5, 7); //01-31
        }

        /**
         * Removes last char in a String
         * @param type $string
         * @return type
         */
        function string_delete_last_char($string) {
            return substr($string, 0, strlen($string) - 1);
        }

        //======================================================================

        /**
         * 
         * @param Int $min
         * @param Int $max
         * @return type
         */
        function generate_random_integer($min, $max) {
            return rand($min, $max);
        }

        function array_get_size($array) {
            return sizeof($array);
        }

        /**
         * Neerly the same as javas HashMap
         * @return string
         */
        function array_hashmap_example() {
            $hashmap = array(
                "Key" => "Value",
                "Key_2" => "Value_2",
            );
            return $hashmap;
        }

        /**
         * Checks if hashmap contains given "key"
         * @param String $key
         * @return boolean
         */
        function array_hashmap_contains_key($key) {
            $arr = array_hashmap_example();
            return array_key_exists($key, $arr);
        }

        /**
         * 
         * @param type $value_to_add
         */
        function array_add_value($value_to_add) {
            $arr = array();
            array_push($arr, $value_to_add);
        }

        /**
         * @tested
         * @param type $key
         * @param type $value
         */
        function array_hashmap_add_value($key, $value) {
            $arr = array();
            $arr[$key] = $value;
        }

        function array_hashmap_iterate($hash_map) {
            foreach ($hash_map as $key => $value) {
                echo "key = $key  ->" . " value = $value <br>";
            }
        }

        /**
         * This method finds matches when you type t.ex. a
         * name. Ex: you type "tr" and the returned result is "trelleborg, traktamente"
         * @param type $array - in which to look up
         * @param type $str_to_look_up - str to look up in the array
         * @return string
         */
        function look_up_hint($array, $str_to_look_up) {
            if (strlen($str_to_look_up) > 0) {
                $hint = "";
                for ($i = 0; $i < count($array); $i++) {
                    if (strtolower($str_to_look_up) == strtolower(substr($array[$i], 0, strlen($str_to_look_up)))) {
                        if ($hint == "") {
                            $hint = $array[$i];
                        } else {
                            $hint = $hint . " , " . $array[$i];
                        }
                    }
                }
            }

            if ($hint == "") {
                $response = "no suggestion";
            } else {
                $response = $hint;
            }
            return $response;
        }
        ?>

        <!--=================================================================-->

        <?php

        function upprakning() {
            ###Example with static
            static $iterationer = 0;
            $iterationer++;
            echo("Denna uppr?kning har k?rt $iterationer g?ng(er)<br>");
        }

        upprakning();
        upprakning();
        upprakning();
        ?>


        <?php
        ### Sets constants like final in Java
        define("GREETING", "Hej på dej!");
        define("NBR_GREETINGS", 3);

        function printGreeting() {
            for ($i = 0; $i < NBR_GREETINGS; $i++) {
                echo "<h2>GREETING</h2>";
            }
        }
        ?>


    </body>
</html>