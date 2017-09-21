<!doctype html>

<html>

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

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

    <style>
        .multipleItems img {
            height: 200px;
            width: 270px;
            box-shadow: 10px 10px 5px #888888;
        }
        
        .image {
            /*
 padding-left: 200px; padding-right: 200px;
*/
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
            display: block;
            width: auto;
            margin: auto;
            padding: 10px;
            border-radius: 20px;
            overflow: hidden;
        }
        
        .slick-prev:before,
        .slick-next:before {
            font-family: FontAwesome;
            font-size: 40px;
            line-height: 1;
            color: red;
            opacity: 0.75;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .slick-prev:before {
            content: "\f053";
        }
        
        [dir="rtl"] .slick-prev:before {
            content: "\f054";
        }
        
        [dir="rtl"] .slick-next {
            left: -10px;
            top: 70px;
            right: auto;
        }
        
        .slick-next:before {
            content: "\f054";
        }
        
        [dir="rtl"] .slick-next:before {
            content: "\f053";
        }
        
        .spacing {
            margin: 10px;
        }
        
        .most:nth-child(1) {
            color: grey;
        }

    </style>

    <script>
        $(document).ready(function() {
            $(".multipleItems").slick({
                accessibility: true,
                infinite: true,
                arrows: true,
                centerMode: true,
                slidesToShow: 4,
                autoplay: true,
                speed: 2000,
                cssEase: 'linear',
                focusOnSelect: true,
                pauseOnHover: true,
                draggable: true,
                mobileFirst: true
            });
        });

    </script>

    <style>
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        
        h3 {
            text-align: center;
        }
        
        h2 {
            text-align: center;
        }
        
        hr {
            border: ridge;
        }
        
        .container {
            margin-top: 15px;
        }
        
        .grayFont {
            color: grey;
        }
        
        #grad {
            background: #000000;
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(#FFFFFF, #f5964f);
        }

        .row {
            vertical-align: text-bottom;
        }

        .multipleItems {
            margin-left: -29px;
        }

        .centerButton {
            align-content: center;
            text-align: center;
        }

    </style>

</head>

<body id="grad">

    <div class='container'>
        <!-- Row 1 -->
        <div class='row'>
            <!-- Col 1 -->
            <div class="col-md-3">
                <img class='img-responsive' src="silhouette_orange.jpg">
                <!-- Inner Row 2 -->
                <div class="row">
                    <h3>Username</h3>
                </div>
                <div class="row centerButton">
                    <input type="button" value="Saved Memes" class="btn">
                </div>
            </div>
            <!-- Col 2 -->
            <div class="col-md-6">
                <h3>Number of Followers:</h3>
                <!-- Inner Row 2 -->
                <div class="row">
                    <!-- Terrible way to this and will look awful on
                         mobile. Ask Weregeles about this. -->
                    <!--
<br>
<br>
<br>
<br>
-->
                    <h3>13,394</h3>
                </div>
            </div>
            <!-- Col 3 -->
            <div class="col-md-2">
                <!-- Inner Row 3 -->
                <h3>Rank:</h3>
                <div class="row">
                    <!-- Terrible way to this and will look awful on
                         mobile. Ask Weregeles about this. -->

                    <h3>Legend</h3>
                </div>
            </div>
        </div>
        <hr>
        <!-- Row 2 -->
        <div class="row">
            <div class="col-md-3">
                <h2 class="grayFont">Most Recent</h2>
            </div>
        </div>
        <!-- Row 3 -->
        <div class="row">
            <div class="col-md-12">
                <div class="multipleItems">
                    <div class="image">
                        <a href="https://www.google.com"><img src="https://i.imgur.com/C3YuR58.jpg" alt="imgur"></a>
                    </div>
                    <div class="image"><img src="https://i.imgur.com/kUCMPWX.jpg" alt="imgur"></div>
                    <div class="image"><img src="https://i.imgur.com/6R6HJ3k.jpg" alt="imgur"></div>
                    <div class="image"><img src="https://i.redd.it/bhu57e955j3y.jpg" alt="imgur"></div>
                    <div class="image"><img src="https://i.imgur.com/EGhMzoL.jpg" alt="imgur"></div>
                    <div class="image"><img src="https://designschool.canva.com/wp-content/uploads/sites/2/cache/2016/01/192/192-662x865.jpg" alt="imgur"></div>
                    <div class="image"><img src="https://c3.staticflickr.com/9/8719/28239271386_751d5ce4c7_h.jpg" alt="imgur"></div>
                </div>
                </script>
            </div>
        </div>


</body>

</html>
