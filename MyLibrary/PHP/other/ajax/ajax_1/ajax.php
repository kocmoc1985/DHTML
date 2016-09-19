<?php

get_information_ajax_request();

function get_information_ajax_request() {
    if (isset($_GET['test_request']) == false) {
        return;
    }

    if (isset($_GET['test_request_2'])) {
        echo "<p>ajax request with jquery</p>";
    }

    $val = $_GET['test_request'];
    echo "<p>";
    if ($val == "100") {
        echo "returning result corresponding to 100";
    } else if ($val == "200") {
        echo "returning result corresponding to 200";
    } else {
        echo "Val unknown";
    }
    echo "</p>";
}

?>
