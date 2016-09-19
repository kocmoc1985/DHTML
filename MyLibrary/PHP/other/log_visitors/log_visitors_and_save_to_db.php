<?php

function logVisitors() {
    $ip = getIP();
    date_default_timezone_set('Europe/Stockholm');
    $date = date("Y-m-d H:i:s");
    $link = $_SESSION['link_session'];
    $user_details = $_SERVER['HTTP_USER_AGENT'];

    if ($ip == "213.115.93.254" || $ip == "localhost" || $ip == "127.0.0.1" || $ip == "78.82.66.195"
    ) {
        return;
    }

    if (strpos(strtolower($user_details), "bot") || strpos(strtolower($user_details), "spider") || strpos(strtolower($user_details), "crawler")
    ) {
        return;
    }

//    CREATE TABLE visitors (
//    ip varchar (20),
//    page varchar (80),
//    time_connected varchar (40),
//    host_info varchar (300)
//    )
    $querry = "insert into visitors values ('$ip','$link','$date','$user_details')";
    executeQuery($querry);
}

?>
