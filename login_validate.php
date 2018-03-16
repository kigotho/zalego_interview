<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<?php


include 'config.php';

$username  = $_POST['username'];
$password  = $_POST['password'];




if (!$conn) {
		die("Database connection FAILED".$conn->connect_error);
	} else{

		$res = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
		$result = mysqli_query($conn,$res);
		$row = mysqli_fetch_array($result,MYSQL_ASSOC);
		
			if (mysqli_num_rows($result)==1){
				
				$user = $row['username'];
				$password = $row['password'];
				$id = $row['ID'];
				echo "logged in";
				
				
			} else{
				
				echo "logged out";
			}

}


?>
<form method="POST" action="edit.php">
	<input  type="hid" name="human" value="<?php echo $username ?>" required="required">
	<button type="submit" name="submit">EDIT PROFILE</button>
</form>




</body>
</html>
