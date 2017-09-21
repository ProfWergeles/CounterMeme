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
   
  $students = array('name' => 'nick', 'age' => 43, 'class' => 'super senior'); 

foreach ($students as $key => $value) {

print $key . "," . $value; 

}



?>