<?php

function recieveSubmitedFileUpload() {
    if (isset($_POST['upload_dir']) == false) {
        return;
    }

    if (isset($_FILES["file"]["type"]) == false) {
        return;
    }

    $allowedExts = array("gif", "jpeg", "jpg", "png", "exe", "pdf", "doc", "docx");
    $arr = explode(".", $_FILES["file"]["name"]);
    $extension = $arr[1];
//    1 MB = 1048576 bytes
    if (
//            ($_FILES["file"]["type"] == "image/gif") ||
//            ($_FILES["file"]["type"] == "image/jpeg") ||
//            ($_FILES["file"]["type"] == "image/jpg") ||
//            ($_FILES["file"]["type"] == "image/pjpeg") ||
//            ($_FILES["file"]["type"] == "image/x-png") ||
//            ($_FILES["file"]["type"] == "application/octet-stream") ||
//            ($_FILES["file"]["type"] == "application/pdf") ||
//            ($_FILES["file"]["type"] == "text/plain") ||
//            ($_FILES["file"]["type"] == "image/png")) &&
//            in_array($extension, $allowedExts) &&
            ($_FILES["file"]["size"] < 104857600)) { //max filesize = 100mb
        if ($_FILES["file"]["error"] > 0) {
            $_SESSION['file_upload'] = false;
        } else {

//            if (file_exists("upload/" . $_FILES["file"]["name"])) {
//                echo $_FILES["file"]["name"] . " already exists. ";
//            }

            move_uploaded_file($_FILES["file"]["tmp_name"], $_POST['upload_dir'] . "/" . $_FILES["file"]["name"]);
            $_SESSION['file_upload'] = true;
            $_SESSION['file_name'] = $_FILES["file"]["name"];
            $_SESSION['file_type'] = $_FILES["file"]["type"];
            $_SESSION['file_size'] = $_FILES["file"]["size"];
        }
    } else {
        $_SESSION['file_upload'] = false;
    }

    redirect();
}

?>
