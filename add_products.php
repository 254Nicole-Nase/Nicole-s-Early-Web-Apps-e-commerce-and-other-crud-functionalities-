<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="add_products.css">
</head>
<body>
<!-- Defining the navigation menu -->
<h1>  PRODUCT ADDITION </h1>
<!--<div class="nav-links">
	<ul>
		<li><a href="">HOME</a></li>
		<li><a href="">PRODUCTS</a></li>
		<li><a href="http://localhost/Tryout/addCategory.php">CATEGORIES</a></li>
		<li><a href="http://localhost/Tryout/addSubcategory.php">SUBCATEGORIES</a></li>
		<li><a href="">OFFERS</a></li>
		<li><a href="">REGISTER</a></li>
		<li><a href="">ABOUT</a></li>
		<li><a href="">CONTACT</a></li>
	</ul>
</div> -->


<div class="container">
<div class="column">
	
	
		<form action="products_db.php" method="post" enctype="multipart/form-data">
		<h3>ADD PRODUCT</h3>

		<input type="text" name="prodID" id="prodID"  class="input-box" placeholder="Product ID" required>

		<input type="text" name="name" id="name"  class="input-box" placeholder="Product Name" required>

		<input type="text" name="description" id="description"  class="input-box" placeholder="Description" required>
	
	<p>Product Image:</p>
		<input type= "file" name="image" id="image" required>

	
		<input type="text" name="unitprice" id="unitprice"  class="input-box" placeholder="Unit_Price" required>
	
		<input type="text" name="availablequantity" id="availablequantity"  class="input-box" placeholder="Quantity" required>

		<input type="text" name="category" id="category"  class="input-box" placeholder="Category"
		 required>

		<input type="text" name="subcategory" id="subcategory"  class="input-box" placeholder="sub-category" required>

	
	
	<input type="submit" name="submit" class="btn" value="Add Product">
</form>

</div>
</div>
</body>
</html>