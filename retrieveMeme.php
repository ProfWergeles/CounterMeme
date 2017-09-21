<?php

    // require_once('openConnection.php');
    // $conn = openConnection();

    // $query = 'SELECT picture, timestamp FROM memes ORDER BY timestamp DESC LIMIT 10;';

    // $result = $conn->query($query);
    // print_r($result);
    // //$field_info = $result->fetch_fields();

    // while ($val = $result->fetch_row()) {
    //     echo $val[1];
    //     echo '<img src="data:image/png;base64,' . $val[0] . '" />';
    // }

function getImagesFromDirectory() {
        $directory = 'testImages/';

            if(!file_exists($directory)) {
                echo 'no such directory';
                exit();
            }

        $string = "";

        if($images = glob($directory . "*.{jpeg,png,gif,jpg}", GLOB_BRACE)) {
            foreach($images as $image) {
                $string .=  "<div class=\"image img-responsive\"><a href=\"$image\"><img src=\"" .$image. "\" alt=\"".$image."\" height=\"500\" width=\"800\"></a></div>";
            }
        }

        return $string;
}

?>
