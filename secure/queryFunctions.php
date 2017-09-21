<?php
	function dbConn() {
    	include('secure/CONFIG.php');
        $mysqli = new mysqli($host, $user, $pass, $db, $port);
        if(mysqli_connect_errno()) {
            echo "Connection Failure: " . $mysqli->connect_error;
            exit;
        }
        return $mysqli;
    }

	function createUser($fName, $lName, $uName, $pWord, $email){
		
		$query = "select * from cmUser where username= ? ";
		echo $fName, $lName, $uName, $pWord, $email;
        $stmt = $db->stmt_init();
        if(!$stmt->prepare($query)){
			echo 'no';
            exit();
        }
        $stmt->bind_param("s", $uName);
        $stmt->execute();
        $result = $stmt->get_result();
        $exists = $result->num_rows;
		$ID = $row['ID'];
		
		echo $ID;
		
        if ($exists == 0){
			echo 'hello1';
            $query = "insert into cmUsers (fName,lName,email,username,password) values ( ? , ? , ? , ? , ?) ";
            $stmt = $db->stmt_init();
            
            if(!$stmt->prepare($query)){
                echo 'fuck';
                exit();
            }
			echo 'hello2';
            $hash = password_hash($pWord, PASSWORD_DEFAULT);
            $stmt->bind_param("ssss", $fName,$lName,$email,$uName,$hash);
            $stmt->execute();
            if ($db->query($query) == TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . $db->error;
            }
			$row = $result->fetch_assoc();
			$ID = $row['ID'];
			echo '$ID';
			
			echo 'hello3';
			//createUserFolders($ID);
			echo 'user files created';
			//createUserTables($ID);
			echo 'user tables created';
            
        }
        else {
            echo 'username taken';
        }
	}



/*
	function createUserFolders($ID){
		mkdir('/var/www/html/database/userContent/.'$ID'.');
		mkdir('/var/www/html/database/userContent/.'$ID'./.'$ID'.smackdowns');
		mkdir('/var/www/html/database/userContent/.'$ID'./.'$ID'.memes');
		mkdir('/var/www/html/database/userContent/.'$ID'./.'$ID'.counters');	
	}
	
	function createUserTables($ID){
		$query = "create table ?followers
			(
				ID int,
				dateFollowed date
				primary key (ID)
				
			);
			create table ?following
			(
				ID int, 
				dateFollowed date,
				primary key (ID),

			);
			create table ?smackdowns 
			(
				ID int auto_increment,

				mainImg varchar(255),
				orangeImg varchar(255),
				greyImg varchar(255),
				greyVotes int,
				orangeVotes int, 
				orangeTitle varchar(255),
				greyTitle varchar(255),
				category varchar(255),
				viewCount int,
				tags varchar(255),
				caption varchar(255),


				primary key (ID),
			);
			create table ?memes 
			( 
				ID int auto_increment, 
				userID int,

				img varchar(255),
				uVotes int,
				dVotes int,

				primary key (ID),
			);";
		$stmt = $db->stmt_init();

		if(!$stmt->prepare($query)){
			echo 'fuck';
			exit();
		}

		$stmt->bind_param("ssss", $ID,$ID,$ID,$ID);
		$stmt->execute();
		if ($db->query($query) == TRUE) {
			echo "user tables created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $db->error;
		}
		
	}



*/
	function getFeaturedSmackdowns(){
		
	}
	function getFeaturedMemes(){
		
	}
	function getSmackdownsFromFollowing(){
		
	} 
	function getCounters(){
		
	}
?>