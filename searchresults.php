<?php

function dbConn() {
    
}

//Do I need this? will not allow people to share search pages or return to the page easily.
//Not sure what this is preventing. Injection? Is there another way?

if(!isset($_POST['search'])) {
    header("Location: ../index.php");
    echo "hello";
}
else {
    include('./secure/CONFIG.php');
    $mysqli = new mysqli($host, $user, $pass, $db, $port);
    if($mysqli->connect_error) {
        echo "Connection Failure: " . $mysqli->connect_error;
        exit;
    }
    
    $search_sql = "SELECT * FROM memes WHERE tags LIKE '%".$_POST['search']."%' OR topText LIKE '%".$_POST['search']."%' OR bottomText LIKE '%".$_POST['search']."%'";
    
    $result = $mysqli->query($search_sql);
//    $search_query = mysql_query($search_sql);
    if($result->num_rows > 0){
//        $search_record_set = mysql_fetch_assoc($search_query); //organizes results of the query
        while($row = $result->fetch_assoc()) {
            echo "memeID: ".$row["memeID"].", tags: ".$row["bottomText"]."<br>";
        }
    } else {echo "0 results";}    
}
?>