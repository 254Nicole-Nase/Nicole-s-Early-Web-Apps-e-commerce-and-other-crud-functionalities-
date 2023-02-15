<?php 

require("connection.php");

$FullName = $_POST['FullName'];
//echo $F_name;
$UserName = $_POST['UserName'];
//echo $u_name;
$email = $_POST['user_email'];
//echo $email;
$Tel_no = $_POST['TelNo'];
//echo $Tel_no;
$pwd = $_POST['pass_wd'];
//echo $pwd;

$sql="INSERT INTO USERS_TABLE (Fullname, UserName, User_email, TelNo, pass_wd) 
VALUES ('$FullName','$User_Name','$email','$Tel_no','$pwd')";
    if(mysqli_query( $conn, $sql)){
        echo "User Registered successfully";
   }else{
       echo "Error".mysqli_error($conn);
    }



 ?>