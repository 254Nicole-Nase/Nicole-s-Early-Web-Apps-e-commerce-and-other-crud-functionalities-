<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" type="text/css" href="add_products.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Product Manager</div>
    <div class="content">
      <form action="DB_register1.php" method="post">
        <div class="user-details">
        	<div class="input-box">
            <span class="details">User ID</span>
            <input type="text" id="added_by" name="user_ID" placeholder="Enter your Usert ID" required>
          </div>
          <div class="input-box">
            <span class="details">Product ID</span>
            <input type="text" id="product_id" name="product_ID" placeholder="Product ID" required>
          </div>
          <div class="input-box">
            <span class="details">Product Name</span>
            <input type="text" id="product_name" name="ProductName" placeholder="Product Name" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" id="product_description" name="product_description" placeholder="Description" required>
          </div>
          <div class="input-box">
            <span class="details">Product Image</span>
            <input type="file" name="fileToUpload" id="product_image">
          </div>
          <div class="input-box">
            <span class="details">Unit Price</span>
            <input type="password" id="pwd" name="pass_wd" placeholder=" Unit Price" required>
          </div>
          <div class="input-box">
            <span class="details">Available quantity</span>
            <input type="password" id="pwd" name="pwd" placeholder="Available quantity" required>
          </div>
        </div>
        <!--<p> <label>Category</label><select name="plan" id="plan">
        <option value="none" class="cage" selected disabled hidden>Select an Category</option>
        <option value="women" id="category_name" name="cat_name">women</option>
        <option value="men"id="category_name" name="cat_name">men</option>
        <option value="children"id="category_name" name="cat_name">Children</option>
        <option value="gender neutral"id="category_name" name="cat_name">Gender Neutral</option>
        <option value="pets"id="category_name" name="cat_name">Pets</option>
      
        </select>
        <label style="margin-left: 60px;">Subcategory</label><select name="plan" id="plan">
        <option value="none" selected disabled hidden>Select a Subcategory</option>
        <option value="Data Structures" id="subcategory_id" name="subcategoryName">Formal</option>
        <option value="oop"id="subcategory_id" name="subcategoryName">Casual</option>
        <option value="oop"id="subcategory_id" name="subcatName">Sports</option>
      
        </select>
        </p>-->

        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
