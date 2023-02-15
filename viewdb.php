<?php
require_once 'users_test.php';
$sql = "SELECT Fullname, UserName, User_email, TelNo, pass_wd FROM USERS_TABLE";
$test = $test=mysqli_query($conn,$sql);
if (isset($_GET['edit'])) {

	$id=$_GET['edit'];
	$sql="SELECT * FROM USERS_TABLE WHERE UserName=$id";
		// code...
}




  ?>