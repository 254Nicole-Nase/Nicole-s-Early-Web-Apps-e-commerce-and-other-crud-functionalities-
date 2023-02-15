<?php
require_once 'DBconn1.php';
$sql = "SELECT Product_ID,product_name,product_image,Product_description,Unit_price,Available_quantity, category_id,subcategory_id FROM product";
$test = $test=mysqli_query($conn,$sql);
if (isset($_GET['edit'])) {

	$id=$_GET['edit'];
	$sql="SELECT * FROM product WHERE Product_ID=$id";
		// code...
}




  ?>