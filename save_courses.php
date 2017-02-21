<?php

include './config/database.php';
include './functions/functions.php';

for ($k = 0; $k < 8; $k++) {
    if ($k > 3) {
        $course = clean($_POST['course_title'][$k]);
        $course2 = clean($_POST['course_title2'][$k]);

        $course_id = clean($_POST['course_id'][$k]);
        $course_id2 = clean($_POST['course_id2'][$k]);

        $query_save_courses = "UPDATE course SET title = '{$course}' WHERE id = '{$course_id}'";
        $query_save_courses2 = "UPDATE course SET title = '{$course2}' WHERE id = '{$course_id2}'";

        $status = mysqli_query($link, $query_save_courses) or die(mysqli_error($link));
        $status2 = mysqli_query($link, $query_save_courses2) or die(mysqli_error($link));
    }
}

if ($status2) {
    echo '<div class="success">Courses saved successfully!</div>';
} else {
     echo '<div class="error">Cannot save courses please try again!</div>';
}
