<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Counter Meme</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/bootstrap-xxs.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/smackdown.css">
        
        <script>
            // Preview image before upload
            function readURL(input, name){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(name).attr('src',e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        
            // Change the image modal
            function showModal(obj){
                $("#imageZoom").attr('src', $(obj).attr('src'));
                $("#imageModal").modal('show');
            }
        
        </script>

        <?php
            require_once('openConnection.php');
        
            $smackID = $_GET["smackdownID"];
//            $smackID = 30;

            $mysqli = openConnection();
            if ($mysqli->connect_errno) {
                die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
            }

            //  Using direct query
            $sql = "SELECT * FROM smackdown WHERE smackdownID =".$smackID;
            $result = $mysqli->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
            } else {
                echo "No data was returned<br>";
            }
            $result->close();
        
            $sql = "SELECT * FROM counters LEFT JOIN memes ON counters.memeID = memes.memeID WHERE counters.parentID is NULL AND counters.smackdownID =".$smackID;
                $result = $mysqli->query($sql);
                $counterRows = array();
        
                //We are saving num_rows here so we can use it to loop in the counters later
                $num_rows = $result->num_rows;
                for($i = 0; $i < $num_rows; $i++){
                    $counterRows[] = $result->fetch_assoc();
                }
            $result->close();
            $mysqli->close();
        ?>
    </head>
    
    <body>

        <div class="container">
        <?php    
            if(isset($_SESSION['name'])){
                include('loggedInNavbar.php');
            } else {
                include('navbar.php');
            }
        ?>
            <div class="row">
                <div class="col-lg-4 col-m-12">
                    <?php echo"<h1 id='graySide'>".$row['grayContender']."</h1>"; ?>
                    <div id="graySideMainImage" class="col-lg-12 col-sm-12">
                        <?php echo "<img class='img-responsive' src='data:image;base64,".$row['grayPicture']."' alt=".$row['grayContender'].">"; ?>
                        <button type="button" class="btn-lg" data-toggle="modal" data-target="#grayDeploy">Deploy</button>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-m-12">
                    <table>
                        <h1>V<span class="orange">S</span></h1>
                        <th colspan="2" class="orange">Scoreboard</th>
                        <tr>
                            <?php echo "<th>".($row['grayVote']? $row['grayVote']:'0')."</th>"; ?>
                            
                            <?php echo "<th class='orange'>".($row['orangeVote']? $row['orangeVote']:'0')."</th>"; ?>
                        </tr>
                    </table>
                    <div class="row">
                    <div class="col-xs-6">
                        <button id="#GrayVote" class="btn btn-default">Cast Vote</button>
                    </div>
                    <div class="col-xs-6">
                        <button id="OrangeVote" class="btn btn-warning">Cast Vote</button>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-m-12">
                    <?php echo"<h1 id='orangeSide'>".$row['orangeContender']."</h1>"; ?>
                    <div id="orangeSideMainImage" class="col-lg-12 col-m-12">
                        <?php echo "<img class='img-responsive' src='data:image;base64,".$row['orangePicture']."' alt=".$row['orangeContender'].">"; ?>
                        <button type="button" class="btn-lg btn-warning" data-toggle="modal" data-target="#orangeDeploy">Deploy</button>
                    </div>
                </div>    
            </div>
            <br>
            <br>
            <!-- Picture Modal -->
            <div id="imageModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">close</span></button>
                  </div>
                  <div class="modal-body">
                    <img id="imageZoom" src="#">
                  </div>
                </div>
              </div>
            </div>
                    <!--Gray Modal -->
        <div id="grayDeploy" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create a Meme</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                        <div class="form-group">
                            <label  class="control-label col-lg-4" for="greyContender">Grey contender:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="greyContender">
                            
                                <label class="sr-only" for="greyPicture">Picture for grey contender:</label>
                                <input onchange="readURL(this, '.upImage1');" type="file" id="greyPicture">
                                <img alt="Image Preview" class="upImage1" src="#">
                            </div>
                        </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning">Deploy</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Orange Modal -->
        <div id="orangeDeploy" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create a Meme</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                        <div class="form-group">
                            <label  class="control-label col-lg-4" for="orangeContender">Orange contender:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="orangeContender">
                            
                                <label class="sr-only" for="orangePicture">Picture for orange contender:</label>
                                <input onchange="readURL(this, '.upImage1');" type="file" id="orangePicture">
                                <img alt="Image Preview" class="upImage1" src="#">
                            </div>
                        </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning">Deploy</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
            <?php
                set_include_path('templates');
                require_once("memeComponent.php");
                require_once("Template.php");
            
                $memeComponent = new MemeComponent($counterRows);
                $result = $memeComponent->generate();
            
                for($i = 0; $i < $num_rows; $i++){
                    $counterBoxes = $result[$i];
                    print $counterBoxes;
                }
            ?>
        </div><!-- END OF CONTAINER -->
        

    </body>
</html>
