<?php

require './config/database.php';
require './functions/functions.php';

$video_url = clean($_POST['url']);

$query_save_url = "UPDATE youtube_video SET url = '{$video_url}' WHERE id = 1";
$result_save_url = mysqli_query($link, $query_save_url) or die(mysqli_error($link));

header('Location: index.php#fixed-tab-2');
