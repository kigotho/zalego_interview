<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<style>
form{
	margin:50px 200px;
}
label,input,select,option{
	width:200px !important;
	padding:7px;
	margin:4px;
	border:1px solid green;
}
br{
	margin:2px;
}
</style>
</head>
<body>
<?php
include 'config.php';
$id  = $_POST['human'];
if (!$conn) {
		die("Database connection FAILED".$conn->connect_error);
	} else{

}
?>
<form method="POST" action="submit.php">
	<label  id="label">First Name</label>
	<input  type="name" name="first_name" required="required">
	<br>
	<label>Last Name</label>
	<input  type="name" name="last_name" required="required">
	<br>
	<label>Gender</label>
	<select name="gender" required="required">
	<option value="male">Male</option>
	<option value="female">Female</option>
	</select>
	<br>
	<label>Languages</label>
	<select name="languages" required="required">
	<option value="Java">Java</option>
	<option value="C">C</option>
	<option value="Python">Python</option>
	</select>
	<br>
	<label>Username</label>
	<input  type="option" name="username" required="required">
	<br>
	<label>Password</label>
	<input  type="option" name="password" required="required">
	<br>
	<label>Confirm Password</label>
	<input  type="option" name="confirm_password" required="required">
	<br>
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
