<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	echo "Connection Ok";
}
else
{
	echo "Connection Failed";
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if($name!="" && $email!="" && $message!="")
{

	$sql = "INSERT INTO contact (name,email,message) VALUES ('$name',$email','$message')";
	$data = mysqli_query($conn,$sql);

	if($data)
	{
		echo "<h1>Get a call back</h1>";
	}
}
else
{
	echo "Not Inserted";
}

//header("refresh:2; url=contact.html");
mysqli_close($conn);



?>
