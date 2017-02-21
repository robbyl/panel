<?php

function clean($string){
    global $link;
    return mysqli_real_escape_string($link, $string);
}
