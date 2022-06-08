<?php


include("../../dbConn.php");
   
	//function to sanitize the data to stop data breaches
	function sanitize($input, $length=50) {
		return substr(htmlentities(trim($input)), 0, $length);
	}
     
	//connecting to database
	if($mysqli) {
		if(!empty($_POST['comment']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) ) { //if name and comment exists 
			$comment = sanitize($_POST['comment']); 
			$name = sanitize($_POST['name']); 
			$email = sanitize($_POST['email']); 
			$country = sanitize($_POST['country']); 
			$gender = sanitize($_POST['gender']);

			//prep, bind, execure query
			$prep = "INSERT INTO comments(comment,name,email,country,gender) VALUES (?,?,?,?,?);";
			$stmt = $mysqli->prepare($prep);
			$stmt->bind_param("sssss", $comment, $name, $email, $country, $gender);
			$stmt->execute();
			$stmt->close();
		}

		// select data
		$sql = "SELECT name,comment,last_date FROM comments";
		$res = $mysqli->query($sql);
        $record = array();
		if($res) {
			while($row = $res->fetch_assoc()) { //fetch data to array
				$record[] = $row;
			}
		}
	}

	// clearing the cache of the server
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: application/json');

	// sending formatted json string back to the client
	echo json_encode($record);
	

?>