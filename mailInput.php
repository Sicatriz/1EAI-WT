<?php

	$naam = $_POST["name"];
	$email = $_POST["email"];
	$bericht = $_POST["message"];

	$servername = "localhost";
	$username = "dbuser";
	$password = "1234";
	$dbname = "mncDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
//	mysql_select_db("mncDB",$conn);

	// Check connection
	if ($conn->connect_error) {
  		echo("Connection failed: " . $conn->connect_error);
	}
//	echo "Connected successfully";

	$sql = "INSERT INTO mncForm (Naam, Mail, Bericht) VALUES ('$naam', '$email', '$bericht')";

	if ($conn->query($sql) === TRUE) {
	
  	echo "New record created successfully";
//		echo '<script>alert("Bedankt voor uw inschrijving!")</script>';
//		redirect('index.php');
		echo ("<script LANGUAGE='JavaScript'>
    	window.alert('Bedankt voor uw bericht, wij nemen spoedig contact met u op.');
    	window.location.href='index.php#contact';
    	</script>");
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();


?>