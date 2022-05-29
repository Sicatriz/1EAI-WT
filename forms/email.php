<?php


if(!empty($_POST["submit"])) {
	$fullname = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$user_message = $_POST["message"];

	$servername = "localhost";
	$username = "dbuser";
	$password = "1234";
	$dbname = "mncDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	mysql_select_db("mncDB",$conn);
	// mysql_query("INSERT INTO Contact (Naam, Mail, Onderwerp, Bericht) VALUES ('" . $fullname. "', '" . $subject. "', '" . $email. "','" . $user_message. "')");
	$conn -> query("INSERT INTO mncForm (Naam, Mail, Onderwerp, Bericht) VALUES ('$fullname', '$email', '$subject', '$user_message')");
	$conn -> close();
	
	//Execute the query and returning a message
	if(!$result = $con->query($sql)){
		die('Error occured [' . $conn->error . ']');
	}
	else
   		echo "Thank you! We will get in touch with you soon";
	
	$insert_id = mysql_insert_id();
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
		
	//debug code voor insertID
	printf("laatste insertID is %d\n", mysql_insert_id());
	}
}





// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



?>