<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script type="text/javascript">
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    animation: "slide"
                });

                $(".dropzone").dropzone({
                    dictDefaultMessage: "",
                    url: "#"
                });
            });
        </script>

    </head>
    <body>
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
                                <form action="#">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <textarea class="mdl-textfield__input" type="text" rows= "8" id="sample5" ></textarea>
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
                                <iframe width="400" height="315" src="https://www.youtube.com/embed/kItl8uZ103M" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <form class="video-form" action="">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <textarea class="mdl-textfield__input" type="text" rows= "1" id="sample5" ></textarea>
                                    <label class="mdl-textfield__label" for="sample5">Enter youtube url ...</label>
                                </div>
                                <br/>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save video link</button>
                            </form>

                        </div>
                    </div>
                </section>
                <section class="mdl-layout__tab-panel" id="fixed-tab-3">
                    <div class="page-content"><!-- Your content goes here -->

                        <form id="form-courses" action="/file-upload" method="post" enctype="multipart/form-data">

                            <div class="mdl-card mdl-shadow--2dp page-wrapper">
                                <div class="card-header card-title-text">Post courses</div>
                                <div style="height: 216px; margin-left: 16px; margin-right: 16px; clear: both;">

                                    <div class="flexslider" style=" height: 200px;">
                                        <ul class="slides">
                                            <li>
                                                <div class="course-wrapper">
                                                    <div class="course-header">
                                                        <div class="dropzone" style="position: absolute;"></div>
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <textarea class="mdl-textfield__input course-textarea" type="text" rows= "2"textfield__input course-textarea id="sample5" >This is very long and simple course title</textarea>
                                                    </div>
                                                </div>
                                                <div class="course-wrapper">
                                                    <div class="course-header">
                                                        <div class="dropzone" style="position: absolute;"></div>
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                                <div class="course-wrapper">
                                                    <div class="course-header">
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                                <div class="course-wrapper end-corse">
                                                    <div class="course-header">
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="course-wrapper">
                                                    <div class="course-header">
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                                <div class="course-wrapper">
                                                    <div class="course-header">
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                                <div class="course-wrapper">
                                                    <div class="course-header">
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                                <div class="course-wrapper end-corse">
                                                    <div class="course-header">
                                                        <img src="images/1.png" />
                                                    </div>
                                                    <div class="course-desc">
                                                        <p>This is very long and simple course title</p>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save courses</button>
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
