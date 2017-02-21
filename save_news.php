<?php

require './config/database.php';
require './functions/functions.php';

$description= clean($_POST['news']);

$query_save_news = "UPDATE news SET description = '{$description}' WHERE id = 1";
$result_save_news = mysqli_query($link, $query_save_news) or die(mysqli_error($link));

if ($result_save_news) {
    echo '<div class="success">News saved successfully!</div>';
} else {
     echo '<div class="error">Cannot save news please try again!</div>';
}
