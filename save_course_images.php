<?php

//header('HTTP/1.1 500 Internal Server Error');
//header('Content-type: text/plain');
require 'config/database.php';
require 'functions/functions.php';
//$msg = "Your error message here.";
//exit($msg);


if (move_uploaded_file($_FILES['file']['tmp_name'], "../totara/theme/ilearn/pix/" . $_FILES['file']['name'])) {

    $file_name = $_FILES['file']['name'];
    $explode = explode('.', $file_name);
    $id = $explode[0];

    $query_update_photo = "UPDATE course SET image = '{$file_name}' WHERE id = '{$id}'";
    $result_update_photo = mysqli_query($link, $query_update_photo) or die(mysqli_error($link));
}



