<?php
require("connection.php");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT Fullname, UserName, User_email, TelNo, pass_wd FROM USERS_TABLE";
$result=$conn -> query($sql);
if ($result->num_rows > 0) {
	print_r($result);
	$row=$result->fetch_assoc();
	print_r($row);
}

$conn->close();

  ?>