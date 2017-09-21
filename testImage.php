<?php
    $host = '127.0.0.1';
    $user = 'test';
    $pass = '';
    $db = 'counterMeme';
    $port = 3306;

    $smackID = 30;

    $mysqli = new mysqli($host, $user, $pass, $db, $port);
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }

    $sql = "SELECT mainPicture FROM smackdown WHERE smackdownID =".$smackID;
    $result = $mysqli->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    } else {
        echo "No data was returned<br>";
    }
    
//    echo "Smackdown ID = ".$row["smackdownID"]." GrayContender = ".$row["grayContender"]." OrangeContender= ".$row["orangeContender"];
//    $grayPicture = $row["grayPicture"];
//    var_dump($grayPicture);

    echo "<img src='data:image;base64,".$row['mainPicture']."'>";
//    header("content-type: image/jpg");
//    echo $grayPicture;

//    echo $row;
    $mysqli->close();


?>