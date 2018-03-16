<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<?php 

include 'config.php';

$firstname = $_POST['first_name'];
$lastname  = $_POST['last_name'];
$gender    = $_POST['gender'];
$language  = $_POST['languages'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$confirm_password  = $_POST['confirm_password'];

	  if (!$conn) {
    	die("Database connection FAILED".$conn->connect_error);
    } else {
	
	    	mysqli_query($conn,"INSERT INTO users(firstname,password,username)
			VALUES('$firstname','$password','$username')");
	
		header("Location: login.php");
	
    }


?>

</body>
</html>
