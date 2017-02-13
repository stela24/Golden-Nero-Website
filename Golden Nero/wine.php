<?php
include 'head.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
    </head>
    <body>
        <div id="fullpage">
            <div class="section headline" style="background-image: url(images/posts/wine_headline.jpg)">
                <div class="scroll-arrow-down bounce"><a href="#"><img src="images/scroll-arrow-down.png"></a></div>
            </div>
            
            <div class="section post-content">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <h2><? echo lang('art2-title') ?></h2>
                                <span class="date">10 ОКТ 2016</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <? echo lang('art2-text') ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <a href="/#blog" class="backBtn">
                                    <img src="images/left-arrow.png"/>
                                    <? echo lang('back') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/jquery-1.11.2.min.js"></script>
            <script src="js/main.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/owl.carousel.js"></script>
            <script src="js/blog-page.js"></script>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>
