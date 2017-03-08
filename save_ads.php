<?php

require './config/database.php';
require './functions/functions.php';

if (move_uploaded_file($_FILES['ads']['tmp_name'], "../totara/theme/ilearn/pix/" . $_FILES['ads']['name'])) {

    $file_name = $_FILES['ads']['name'];

    $query_update_photo = "UPDATE ads SET image = '{$file_name}' WHERE id = 1";
    $result_update_photo = mysqli_query($link, $query_update_photo) or die(mysqli_error($link));
}

echo "<img src='../totara/theme/ilearn/pix/{$file_name}' />";

