   <?php
    $host = '127.0.0.1';
    $user = 'test';
    $pass = '';
    $db = 'counterMeme';
    $port = 3306;

    $mysqli = new mysqli($host, $user, $pass, $db, $port);
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }

//    print_r($_POST);
    $category = $mysqli->real_escape_string($_POST["category"]);
    $tags = $mysqli->real_escape_string($_POST["tags"]);

    $mainPicture = base64_encode(file_get_contents(addslashes($_FILES["mainPicture"]["tmp_name"])));
    if(!$mainPicture){
        echo "No main Picture found<br>";
    }
    $grayContender = $mysqli->real_escape_string($_POST["grayContender"]);
    if(!$grayContender){
        echo "No Gray Contender Name found<br>";
    }
    
    $grayPicture = base64_encode(file_get_contents(addslashes($_FILES["grayPicture"]["tmp_name"])));
    if(!$grayPicture){
        echo "No Gray Contender Picture found<br>";
    }
    $orangeContender = $mysqli->real_escape_string($_POST["orangeContender"]);
    if(!$orangeContender){
        echo "No Orange Contender Name found<br>";
    }
    $orangePicture = base64_encode(file_get_contents(addslashes($_FILES["orangePicture"]["tmp_name"])));
    if(!$orangePicture){
        echo "No Orange Picture found<br>";
    }

//    //Testing purposes with insecure query method
//    $query = "INSERT INTO smackdown(grayContender, orangeContender, grayPicture, orangePicture, mainPicture, category, tags) VALUES ('$grayContender','$orangeContender', '$grayPicture', '$orangePicture', '$mainPicture', '$category', '$tags')";
//    
//    print $query;
//
//    $mysqli->query($query);

    
    //Prepared Statement query
    if (!($stmt = $mysqli->prepare("INSERT INTO smackdown(grayContender, orangeContender, grayPicture, orangePicture, mainPicture, category, tags) VALUES (?,?,?,?,?,?,?)"))) {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    $null = NULL;
    
    if (!$stmt->bind_param("ssbbbss", $grayContender, $orangeContender, $null, $null, $null, $category, $tags)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . "<br>\n";
    }

    $stmt->send_long_data(2, $grayPicture);
    $stmt->send_long_data(3, $orangePicture);
    $stmt->send_long_data(4, $mainPicture);

    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "<br>\n";
    } else {
        echo "Successfully uploaded the images";
    }
    
    $lastID = $mysqli->insert_id;

    $stmt->close();
    $mysqli->close();
    
    header('Location: Smackdown.php?smackdownID='.$lastID);
?>