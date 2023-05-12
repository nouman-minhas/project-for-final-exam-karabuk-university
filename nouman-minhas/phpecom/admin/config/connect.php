<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	
	$phone= $_POST['phone'];
	$Password = $_POST['Password'];
	$Re-Enter Password = $_POST['Re-Enter Password'];
	
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(Name, email, phone, Password, Re-Enter Password) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiii", $Name, $email, $phone, $password, $Re-Enter Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>