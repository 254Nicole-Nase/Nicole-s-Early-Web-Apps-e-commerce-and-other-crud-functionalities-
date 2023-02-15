<?php 

require("DBconn1.php");

$first_name = $_POST['Fullname'];
$last_name = $_POST['UserName'];
$email = $_POST['Email'];
$gender = $_POST['gender'];
$password = $_POST['password'];


//echo $pwd;

  $sql="INSERT INTO tbl_users (user_id, first_name,last_name, email, password, gender, role, is_deleted) 
VALUES ( '$user_id','$first_name','$last_name','$email','$password','$gender','$added_by','$is_deleted')";
    if(mysqli_query( $conn, $sql)){
        echo "User Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
 ?>