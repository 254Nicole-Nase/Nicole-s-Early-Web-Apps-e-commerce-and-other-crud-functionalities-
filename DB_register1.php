<?php 

require("DBconn1.php");
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
//echo $u_name;
$product_description = $_POST['product_description'];
$product_image = $_POST['fileToUpload'];
$added_by = $_POST['user_id'];
$role = $_POST['role_id'];
$category_id = $_POST['categoryID'];
$category_name = $_POST['categoryName'];
$is_deleted = $_POST['is_deleted'];
$subcategory_id = $_POST['subcategoryID'];
$subcategory_name = $_POST['subcategoryName'];
$role_id = $_POST['Role'];
$role_name = $_POST['RoleName'];
$user_id = $_POST['User_id'];
$first_name = $_POST['FirstName'];
$last_name = $_POST['LastName'];
$email = $_POST['Email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$amount_available = $_POST['amount_available'];

//echo $pwd;

$sql="INSERT INTO tbl_roles (role_id, role_name, is_deleted) 
VALUES ('$role_id','$role_name','$is_deleted')";
    if(mysqli_query( $conn, $sql)){
        echo "Role Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
 

$sql="INSERT INTO tbl_categories (category_id, category_name, is_deleted) 
VALUES ('$category_id','$category_name','$is_deleted')";
    if(mysqli_query( $conn, $sql)){
        echo "Category Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }

$sql="INSERT INTO tbl_subcategories (subcategory_id, subcategory_name, category, is_deleted) 
VALUES ('$subcategory_id','$subcategory_name','$category_id','$is_deleted')";
    if(mysqli_query( $conn, $sql)){
        echo "Subcategory Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
 

$sql="INSERT INTO TBL_PRODUCT (product_id, product_name, product_description, product_image, added_by, created_at,updated_at, is_deleted) 
VALUES ('$product_id','$product_name','$product_description','$product_image','$user_id','$created_at','$updated_at','$is_deleted')";
    if(mysqli_query( $conn, $sql)){
        echo "Product Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }

  $sql="INSERT INTO tbl_users (user_id, first_name,last_name,email,password,gender,role, is_deleted) 
VALUES ('$user_id', '$first_name','$last_name','$email','$password','$gender','$role_id','$is_deleted')";
    if(mysqli_query( $conn, $sql)){
        echo "User Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
 ?>