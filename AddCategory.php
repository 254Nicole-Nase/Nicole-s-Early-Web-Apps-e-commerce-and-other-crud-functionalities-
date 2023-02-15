<?php 

require("DBconn1.php");

$Category_ID = $_POST['CategoryID'];
$Category_Name = $_POST['CategoryName'];
$is_deleted = $_POST['is_deleted'];


//echo $pwd;
$sql="INSERT INTO category (Category_ID, Category_Name) 
VALUES ('$Category_ID','$Category_Name')";
    if(mysqli_query( $conn, $sql)){
        echo "Category Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
 ?>