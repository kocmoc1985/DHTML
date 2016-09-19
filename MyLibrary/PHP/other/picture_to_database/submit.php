<?php

get_picture_from_database();
submit_picture_to_db_upload();

//==============================================================================

/**
 * This method gets the requested image from database.
 * This method should be placed in "submit.php".
 * NOTE: to display the picture you need to do following:
 * '<img src="submit.php?image_from_db_id=1" width="175" height="200" />'
 * @return type
 */
function get_picture_from_database() {
    if (isset($_GET['image_from_db_id']) == FALSE) {
        return;
    }

    $id = $_GET['image_from_db_id'];

    // do some validation here to ensure id is safe
    $sql = "select image from product_images where id=$id";
    $resultSet = executeSelectQuery($sql);
    $row = mysqli_fetch_array($resultSet);

    header("Content-type: image/jpeg");
    echo $row['image'];
}

/**
 * 
 * @return type
 */
function submit_picture_to_db_upload() {
//            create table  product_images (
//            id integer primary key AUTO_INCREMENT,
//            image blob,
//            image_name varchar (30) not NULL
//            );
    if (isset($_POST['pic_upload']) == false) {
        return;
    }

    if (isset($_FILE['image']['tmp_name'])) {
        return;
    }

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
    $image_name = addslashes($_FILES['image']['name']);
    $querry = "INSERT INTO `product_images` (`image`, `image_name`) VALUES ('{$image}', '{$image_name}')";
    executeQuery($querry);
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
