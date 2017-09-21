
<DOCTYPE! html>
<html>
<head></head>

   <body>
       <form method="post" enctype="multipart/form-data">
       <br/>
            <input type="file" name="image"/>
             <br/><br/>
             <input type="submit" name="submit" value="Upload" />
      
    
          
      <?php
    $host = '127.0.0.1';
    $user = 'test';
    $pass = '';
    $db = 'counterMeme';
    $port = 3306;

      if(isset($_POST['submit']))          {
    $mysqli = new mysqli($host, $user, $pass, $db, $port);
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }
      
    $mainPicture = base64_encode(file_get_contents(addslashes($_FILES["image"]["tmp_name"])));
    
    if(!$mainPicture){
        echo "No main Picture found<br>";
    }
      if (!($stmt = $mysqli->prepare("INSERT INTO image(image, image_name) VALUES (?,?)"))) {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
      
       $null = NULL;
      
       if (!$stmt->bind_param("sb", $mainPicture, $null)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . "<br>\n";
    }
       $stmt->send_long_data(2, $mainPicture);
      
      
       if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "<br>\n";
    } else {
        echo "Successfully uploaded the images";
    }
      }
      ?>
       
       
        </form> 
       
       
       
    
    </body>



</html>