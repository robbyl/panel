<?php
require './config/database.php';

$result_video_url = mysqli_query($link, "SELECT * FROM youtube_video");
$url = mysqli_fetch_array($result_video_url);

$result_news = mysqli_query($link, "SELECT * FROM news");
$news = mysqli_fetch_array($result_news);

$query_courses = "SELECT * FROM course LIMIT 0, 4";
$result_courses = mysqli_query($link, $query_courses) or die(mysqli_error($link));

$query_courses2 = "SELECT * FROM course LIMIT 4, 8";
$result_courses2 = mysqli_query($link, $query_courses2) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <!--<link href="css/material.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/material.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/flexslider.css" rel="stylesheet" type="text/css"/>
        <link href="css/dropzone.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-1.8.2.js" type="text/javascript"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/dropzone.js" type="text/javascript"></script>
        <script src="js/material.js" type="text/javascript"></script>
        <script src="js/functions.js" type="text/javascript"></script>


        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <?php $courses_no = 4 ?>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    slideshow: false,
                    animation: "slide"
                });
                
                $('#form-courses').submit(function (e){
                    e.preventDefault();
                    saveCourses();
                });
                
                $('#save-news').submit(function (e){
                    e.preventDefault();
                    saveNews();
                });

                Dropzone.autoDiscover = false;
<?php
for ($i = 1; $i <= 8; $i++) {
    echo "$('.dropzone{$i}').dropzone({
        renameFilename: function (filename) {
            return  '{$i}.' + filename.substr( (filename.lastIndexOf('.') +1) );
        },
                    dictDefaultMessage: '',
                    url: 'move_uploaded_course_images.php'
                });";
    echo "\r\n";
}
?>

            });
        </script>

    </head>
    <body>

        <div id="status"></div>

        <!-- Simple header with fixed tabs. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">iLean-ea</span>
                </div>
                <!-- Tabs -->
                <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
                    <a href="#fixed-tab-1" class="mdl-layout__tab is-active">News</a>
                    <a href="#fixed-tab-2" class="mdl-layout__tab">Videos</a>
                    <a href="#fixed-tab-3" class="mdl-layout__tab">Courses</a>
                    <a href="#fixed-tab-4" class="mdl-layout__tab">Ads</a>
                </div>
            </header>
            <main class="mdl-layout__content">
                <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
                    <div class="page-content"><!-- Your content goes here -->

                        <div class="mdl-card mdl-shadow--2dp page-wrapper">
                            <div class="card-header card-title-text">Post news</div>
                            <div class="mdl-card__supporting-text">
                                <form action="save_news.php" id="save-news" method="POST">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <textarea class="mdl-textfield__input" name="news" type="text" rows= "8" ><?php echo $news['description'] ?></textarea>
                                        <label class="mdl-textfield__label" for="sample5">Enter news contents...</label>
                                    </div>
                                    <br/>

                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save news contents</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="mdl-layout__tab-panel" id="fixed-tab-2">
                    <div class="page-content"><!-- Your content goes here -->

                        <div class="mdl-card mdl-shadow--2dp page-wrapper">
                            <div class="card-header card-title-text">Post home video link</div>

                            <div class="video-container">
                                <iframe width="400" height="315" src="<?php echo $url['url'] ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <form class="video-form" action="save_url.php" method="POST">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <textarea class="mdl-textfield__input" name="url" type="text" rows= "1" id="sample5" ><?php echo $url['url'] ?></textarea>
                                    <label class="mdl-textfield__label" for="sample5">Enter youtube video url</label>
                                </div>
                                <br/>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save video link</button>
                            </form>

                        </div>
                    </div>
                </section>
                <section class="mdl-layout__tab-panel" id="fixed-tab-3">
                    <div class="page-content"><!-- Your content goes here -->

                        <form id="form-courses" action="save_courses.php" method="post" enctype="multipart/form-data">

                            <div class="mdl-card mdl-shadow--2dp page-wrapper">
                                <div class="card-header card-title-text">Post courses</div>
                                <div style="height: 216px; margin-left: 16px; margin-right: 16px; clear: both;">

                                    <div class="flexslider" style=" height: 200px;">
                                        <ul class="slides">
                                            <li>
                                                <?php
                                                $j = 1;
                                                while ($course = mysqli_fetch_array($result_courses)) {
                                                    ?>
                                                    <div class="course-wrapper <?php if ($j == 4) echo " end-corse"; ?>">
                                                        <div class="course-header">
                                                            <div class="dropzone<?php echo $j ?> dropzone" style="position: absolute;"></div>
                                                            <img src="images/1.png" />
                                                        </div>
                                                        <div class="course-desc">
                                                            <textarea class="mdl-textfield__input course-textarea" name="course_title[]" type="text" rows= "2"><?php echo $course['title'] ?></textarea>
                                                            <input name="course_id[]" value="<?php echo $course['id'] ?>" type="hidden"/>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $j++;
                                                }
                                                ?>
                                            </li>
                                            <li>
                                                <?php
                                                $j = 5;
                                                while ($course2 = mysqli_fetch_array($result_courses2)) {
                                                    ?>
                                                    <div class="course-wrapper <?php if ($j == 8) echo " end-corse"; ?>">
                                                        <div class="course-header">
                                                            <div class="dropzone<?php echo $j ?> dropzone" style="position: absolute;"></div>
                                                            <img src="images/1.png" />
                                                        </div>
                                                        <div class="course-desc">
                                                            <textarea class="mdl-textfield__input course-textarea" name="course_title2[]" type="text" rows= "2"><?php echo $course2['title'] ?></textarea>
                                                            <input name="course_id2[]" value="<?php echo $course2['id'] ?>" type="hidden"/>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $j++;
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="save-course">Save courses</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>
                <section class="mdl-layout__tab-panel" id="fixed-tab-4">
                    <div class="page-content"><!-- Your content goes here -->

                        <div class="mdl-card mdl-shadow--2dp page-wrapper">
                            <div class="mdl-card__supporting-text">
                                The Sky Tower is an observation and telecommunications tower located in Auckland,
                                New Zealand. It is 328 metres (1,076 ft) tall, making it the tallest man-made structure
                                in the Southern Hemisphere.
                            </div>
                        </div>

                    </div>
                </section>
            </main>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
