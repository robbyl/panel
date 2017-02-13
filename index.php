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
        <script src="js/material.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    </head>
    <body>
        <!-- Simple header with scrollable tabs. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Title</span>
                </div>
                <!-- Tabs -->
                <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
                    <a href="#scroll-tab-1" class="mdl-layout__tab is-active">News</a>
                    <a href="#scroll-tab-2" class="mdl-layout__tab">Videos</a>
                    <a href="#scroll-tab-3" class="mdl-layout__tab">Courses</a>
                    <a href="#scroll-tab-4" class="mdl-layout__tab">ads</a>
                </div>
            </header>
            <main class="mdl-layout__content">
                <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
                    <div class="page-content"><!-- Your content goes here --></div>
                </section>
                <section class="mdl-layout__tab-panel" id="scroll-tab-2">
                    <div class="page-content"><!-- Your content goes here --></div>
                </section>
                <section class="mdl-layout__tab-panel" id="scroll-tab-3">
                    <div class="page-content"><!-- Your content goes here --></div>
                </section>
                <section class="mdl-layout__tab-panel" id="scroll-tab-4">
                    <div class="page-content"><!-- Your content goes here --></div>
                </section>
            </main>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
