<?php if(!session_start()){
    if(!isset($_SESSION['fName'])){
        header("location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Counter Meme</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
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
        </script>
        
        <style>            
            .orangeSide {
                color: orange;
            }
            
            .mainPic {
                display: block;
                width: 100%;
                max-height: 500px;
                height: auto;
            }
            
            img {
                display: block;
                width: 100%;
                max-height: 300px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php include'loggedInNavbar.php'; ?>
            <form action="NewSmackdown.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-center">Create a <span class="orangeSide">Smackdown</span></h1>
            <div class="row">
                <div class="col-lg-6">
<!--                    <form>-->
                        <div class="form-group">
                            <label for="category">Smackdown Category:</label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                        <div class="form-group">
                            <label for="tags">Optional tags:</label>
                            <input type="text" class="form-control" id="tags" name="tags">
                            <p>Tags must be separated by a comma ","</p>
                        </div>
                        <div class="form-group">
                            <label for="mainPicture">Smackdown main picture:</label>
                            <input onchange="readURL(this, '.mainPic')" type="file" id="mainPicture" name="mainPicture">
                            <img alt="Image Preview" class="mainPic" src="#">
                        </div>
<!--                    </form>-->
                </div>
                <div class="col-lg-6">
<!--                    <form class="form-horizontal">-->
                        <div class="form-group">
                            <label  class="control-label col-lg-4" for="grayContender">Grey contender:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="grayContender" name="grayContender">
                            
                                <label class="sr-only" for="grayPicture">Picture for gray contender:</label>
                                <input onchange="readURL(this, '.upImage1');" type="file" id="grayPicture" name="grayPicture">
                                <img alt="Image Preview" class="upImage1" src="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="orangeSide control-label col-lg-4" for="orangeContender">Orange contender:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="orangeContender" name="orangeContender">
                                
                                <label class="sr-only" for="orangePicture">Picture for orange contender:</label>
                                <input onchange="readURL(this, '.upImage2');" type="file" id="orangePicture" name="orangePicture">
                                <img alt="Image Preview" class="upImage2" src="#">
                            </div>
                        </div>
<!--                    </form>-->
                </div>
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-info" value="Create">
                </div>    
            </div>
        </form>
        </div>
        
    </body>
</html>