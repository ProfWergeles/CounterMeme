<?php

require_once('/var/www/html/insertMeme.php');
require_once('/var/www/html/retrieveMeme.php');

include('../navbar.php');

?>

<!doctype HTML>

<html>

<head>
    <title> carousel </title>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../homepage/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../homepage/slick/slick-theme.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">


    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../homepage/slick/slick.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">
    </script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <style>
        .multipleItems img {
            height: 200px;
            width: 270px;
            box-shadow: 10px 10px 5px #888888;
        }
        
        body {
            background-color: white;
        }
        
        h1 {
            position: relative;
            left: 1%;
            margin-bottom: 3px;
        }
        /*Add shadows behind the images*/
        
        .multipleItems {
            text-align: center;
            /*display: block;*/
            /*width: auto;*/
            /*margin: auto;*/
            /*padding: 10px;*/
            border-radius: 20px;
            overflow: hidden;
        }
        
        /*.slick-prev:before,*/
        /*.slick-next:before {*/
            /*font-family: FontAwesome;*/
            /*font-size: 40px;*/
            /*line-height: 1;*/
            /*color: black;*/
            /*background-image: url('backward-arrow.jpg');*/
            /*opacity: 0.75;*/
            /*-webkit-font-smoothing: antialiased;*/
            /*-moz-osx-font-smoothing: grayscale;*/
        /*}*/
        /**/
        /*.slick-prev:before {*/
            /*content: "\f053";*/
        /*}*/
        /**/
        /*[dir="rtl"] .slick-prev:before {*/
            /*content: "\f054";*/
        /*}*/
        /**/
        /*[dir="rtl"] .slick-next {*/
            /*left: -10px;*/
            /*top: 70px;*/
            /*right: auto;*/
        /*}*/
        /**/
        /*.slick-next:before {*/
            /*content: "\f054";*/
        /*}*/
        /**/
        /*[dir="rtl"] .slick-next:before {*/
            /*content: "\f053";*/
        /*}*/
        
        .spacing {
            margin: 10px;
        }
        
        .most:nth-child(1) {
            color: grey;
        }

        /*.multipleItems {
            align-content: center;
        }*/

       
    
    </style>

    <script>
        $(document).ready(function() {
            $(".multipleItems").slick({
                accessibility: true,
                infinite: true,
                arrows: true,
                slidesToShow: 4,
                autoplay: true,
                speed: 2000,
                cssEase: 'linear',
                focusOnSelect: true,
                pauseOnHover: true,
                draggable: true,
                variableWidth: false,
                arrows: true,
                // prevArrow:"<img class='a-left control-c prev slick-prev' src='backward-arrow.jpg'>",
                // nextArrow:"<img class='a-right control-c next slick-next' src='forward-arrow.jpg'>",
                responsive: [
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600, //at 600px wide, only 2 slides will show
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                        {
                        breakpoint: 480, //at 480px wide, only one slide will show
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    ]
            });
        });

        
    </script>

    <style>
     .prev {
            height: 50px;
            width: 50px;
        }

        .next {
            height: 50px;
            width: 50px;
        }
        </style>

</head>

<body>

    <h1 class="most">Most heated</h1>
    <div class="multipleItems col-md-12">
        <?php
            echo getImagesFromDirectory();
        ?>
    </div>
    <div class="spacing"></div>
    <!--<h1 class="creme">Cream de la Meme</h1>-->
    <!--<div class="multipleItems">-->
        <!--<div class="image"><img src="https://i.imgur.com/C3YuR58.jpg" alt="imgur"></div>-->
        <!--<div class="image"><img src="https://i.imgur.com/kUCMPWX.jpg" alt="imgur"></div>-->
        <!--<div class="image"><img src="https://i.imgur.com/6R6HJ3k.jpg" alt="imgur"></div>-->
        <!--<div class="image"><img src="https://i.redd.it/bhu57e955j3y.jpg" alt="imgur"></div>-->
        <!--<div class="image"><img src="https://i.imgur.com/EGhMzoL.jpg" alt="imgur"></div>-->
        <!--<div class="image"><img src="https://designschool.canva.com/wp-content/uploads/sites/2/cache/2016/01/192/192-662x865.jpg" alt="imgur"></div>-->
        <!--<div class="image"><img src="https://c3.staticflickr.com/9/8719/28239271386_751d5ce4c7_h.jpg" alt="imgur"></div>-->
    <!--</div>-->



</body>

</html>