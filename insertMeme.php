<!-- Author: Austin Hartschen -->

<?php

    function insertMeme() {
        date_default_timezone_set('America/Chicago');
        $directory = '/var/www/html/testImages/';

        if(!file_exists($directory)) {
            echo 'no such directory';
            exit();
        }

        if($images = glob($directory . "*.{jpeg,png,gif,jpg}", GLOB_BRACE)) {
            require_once('/var/www/html/openConnection.php');
            $conn = openConnection();
            foreach ($images as $image) {
                
                $image = base64_encode(file_get_contents(addslashes($image)));
//                echo $image . '<br>';
//                $image = mysql_real_escape_string($image);
                $created_date = date("Y-m-d H:i:s");
                $sql = "INSERT INTO memes (memeID, picture, timestamp) VALUES (null, '$image', '$created_date');";
                if($conn->query($sql) === TRUE) {
                    echo 'Insertion worked<br>';
                }
                else echo "insertion did not work";
            }
        }
        else {
            echo "glob did not work";
        }
    }

?>