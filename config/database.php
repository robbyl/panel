<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ilearn_panel';


$link = mysqli_connect($host, $user, $password) or die(mysqli_error($link));
$db = mysqli_select_db($link, $database);

