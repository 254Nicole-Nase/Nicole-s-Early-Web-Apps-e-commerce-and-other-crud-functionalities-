<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="add_products.css">
</head>
<body>
<!-- Defining the navigation menu -->
<h1>  CATEGORY ADDITION </h1>
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
  
  
    <form action="AddCategory.php" method="post">
    <h3>ADD CATEGORY</h3>

    <input type="text" name="Category_ID" id="Category_ID"  class="input-box" placeholder="Category ID" >
    

    <input type="text" name="Category_Name" id="Category_Name"  class="input-box" placeholder="Category Name">

  
  <!--<input type="submit" name="submit" class="btn">-->
  <button class="btn">Add Category</button>
  <div><a href="http://localhost/ecommerce_clothes_2A/Add_Category.php">ADD SUB-CATEGORIES</a></div>
</form>


</div>
</div>
</body>
</html>