<?php

//    $smackID = $_GET["smackdownID"];
    $smackID = 30;
    $host = '127.0.0.1';
    $user = 'test';
    $pass = '';
    $db = 'counterMeme';
    $port = 3306;

    $mysqli = new mysqli($host, $user, $pass, $db, $port);
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }

//    //Using prepared Statement
//    if (!($stmt = $mysqli->prepare("SELECT grayContender, orangeContender, grayPicture, orangePicture FROM smackdown WHERE smackdownID = ?"))) {
//        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
//    }
//
//    $stmt->bind_param("i", $smackID);
//    $stmt->execute();
//
//    $stmt->bind_result($grayContender, $orangeContender, $grayPicture, $orangePicture);
//
//    $stmt->fetch();
    
//  Using direct query
    $sql = "SELECT * FROM smackdown WHERE smackdownID =".$smackID;
    $result = $mysqli->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    } else {
        echo "No data was returned<br>";
    }
    
    echo "Smackdown ID = ".$row["smackdownID"]." GrayContender = ".$row["grayContender"]." OrangeContender= ".$row["orangeContender"] . " GrayVote= ".$row['grayVote']."<br>\n";

    echo "<img src='data:image;base64,".$row['grayPicture']."'>";
//    header("content-type: image/jpg");
//    echo $grayPicture;

//    echo $row;
    $mysqli->close();
?>