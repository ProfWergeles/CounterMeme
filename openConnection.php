<!-- Author: Austin Hartschen -->

<?php

    function openConnection() {
        require_once('/var/www/html/secure/CONFIG.php');


        $conn = new mysqli($host, $user, $pass, $db, $port);

        if(mysqli_connect_errno()) {
             die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
            exit;
        }

        return $conn;
    }

?>