
<?php

	// Connect to database
	$con = mysqli_connect("localhost","root","","e_commerce");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM `category`";
	$all_categories = mysqli_query($con,$sql);
    $sql = "SELECT * FROM `sub_category`";
	$all_subcategories = mysqli_query($con,$sql);
	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		// Store the Product name in a "name" variable
		$name = mysqli_real_escape_string($con,$_POST['Product_name']);
		$price = mysqli_real_escape_string($con,$_POST['Unit_price']);
		$quantity = mysqli_real_escape_string($con,$_POST['quantity']);
		$description = mysqli_real_escape_string($con,$_POST['product_description']);
		// Store the Category ID in a "id" variable
		$id = mysqli_real_escape_string($con,$_POST['Category']);
		$id_b = mysqli_real_escape_string($con,$_POST['SubCategory']);
		$filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        //folder where images will be uploaded
        $folder = "/images/" . $filename;
	     

		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		$sql_insert =
		"INSERT INTO `product`(`product_name`,`product_image`,`Product_description`,`Unit_price`,`Available_quantity`, `category_id`,`subcategory_id`)
			VALUES ('$name','$filename','$description','$price','$quantity','$id','$id_b')";
		
		// The following code attempts to execute the SQL query
		// if the query executes with no errors
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("Product added successfully")</script>';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="add_products.css">
	<!--<meta name="viewport"
		content="width=device-width, initial-scale=1.0">-->	
</head>
<body>
	<h1>  PRODUCT ADDITION </h1>
	<div class="container">
<div class="column">
	<h3>ADD PRODUCT</h3><div class="content">
	<form method="POST"enctype="multipart/form-data">
		<div class="user-details">
		<div class="input-box"><label>Name of Product:</label>
		<input type="text" name="Product_name" required><br></div>
		<div class="input-box"><label>Product Image:</label>
		<input type="file" name="uploadfile" /></div><br>
		<div class="input-box"><label>Unit Price:</label>
		<input type="text" name="Unit_price" required><br></div>
		<div class="input-box"><label>Available Quantity:</label>
		<input type="text" name="quantity" required><br></div>
        
		<div class="input-box"><label>Select a Category</label>
		<select name="Category">
			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($category = mysqli_fetch_array(
						$all_categories,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $category["Category_ID"];
					// The value we usually set is the primary key
				?>">
					<?php echo $category["Category_Name"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select></div>
		<br>
		<div class="input-box"><label>Select SubCategory</label>
		<select name="SubCategory">
			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($sub_category = mysqli_fetch_array(
						$all_subcategories,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $sub_category["SubCategory_ID"];
					// The value we usually set is the primary key
				?>">
					<?php echo $sub_category["SubCategory_Name"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select></div>
		<br>
		<div class="input-box"><label>Product Description:</label>
		<input type="text" name="product_description" required><br></div>
		<div class="button"><input type="submit" value="submit" name="submit"></div></div>
	</form></div>
</div>
</div>
	<br>
</body>
</html>
