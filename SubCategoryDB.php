<?php 

require("DBconn1.php");

$SubCategory_ID = $_POST['SubCategoryID'];
$SubCategory_Name = $_POST['SubCategoryName'];
$Category_ID = $_POST['CategoryID'];
$is_deleted = $_POST['is_deleted'];


//echo $pwd;
$sql="INSERT INTO sub_category (SubCategory_ID, SubCategory_Name,CategoryID) 
VALUES ('$SubCategory_ID','$SubCategory_Name','$Category_ID')";
    if(mysqli_query( $conn, $sql)){
        echo "SubCategory Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
 ?>