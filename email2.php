<?php


if(!empty($_POST["submit"])) {
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$user_message = $_POST["user_message"];

	$servername = "localhost";
	$username = "dbuser";
	$password = "1234";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	
	mysql_select_db("mncDB",$conn);
	mysql_query("INSERT INTO Contact (LastName, Mail, Phone) VALUES ('" . $fullname. "', '" . $email. "','" . $user_message. "')");
	$insert_id = mysql_insert_id();
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
	}
}





// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



?>