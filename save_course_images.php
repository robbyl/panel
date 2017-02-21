<?php

require './config/database.php';
require './functions/functions.php';

$file_name = clean($_FILES['file']['name']);

if (move_uploaded_file($file_name, "G:/demo/" . $_FILES['file']['name'])) {
    
    $explode = explode('.', $file_name);
    $id = $explode[0];
    
    $query_update_photo = "UPDATE course SET image = {$file_name} WHERE id = {$id}";
    $result_update_photo = mysqli_query($link, $query_update_photo) or die(mysqli_error($link));
}

