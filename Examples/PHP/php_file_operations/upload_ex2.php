<?php

function upload_delete_file() {
    $upload_dir = "./images/";
    $errortext = "";
    if (isset($_GET['action']) && $_GET['action'] == "delete" && file_exists($_GET['file'])) {
        unlink($_GET['file']);
    }


    if (isset($_FILES["userfile"])) {
        if ($_FILES["userfile"]["name"] != "") { //kontrollera tomma strangen
            copy($_FILES["userfile"]["tmp_name"], $upload_dir . $_FILES["userfile"]["name"]);
        } else {
            $errortext = "<p style=\"color: red\">Du maste ange en giltig sokvag!</p>\n";
        }
    }
}
?>


<form method="POST" action="<?php $PHP_SELF ?>" enctype="multipart/form-data" name="fileform">
    <p>
        Valj fil att ladda upp: <input type="file" name="userfile" >
        <input type="submit" value="Ladda upp">
    </p>
</form>




<?php
$handle = opendir($upload_dir);
if ($handle) {
    echo "<p>Katalogens handtag: $handle<br>\n";
    echo "Inneholl:<br>\n";
    while (false !== ($file = readdir($handle))) {
        if ("file" == filetype($upload_dir . $file)) { //listar endast filer
            echo "$file ";
            echo "<a href=\"upload_ex2.php?action=delete&amp;file=$upload_dir$file\"> ta bort</a><br>\n";
        }
    }
    echo "</p>";
    closedir($handle);
} else {
    echo "<p>Kunde inte oppna katalogen.</p>";
}
?>
    
