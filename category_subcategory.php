<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="Registration.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container" style="top: 10vh;">
    <div class="title">Product Manager</div>
    <div class="content">
      <form action="DB_register1.php" method="post">
        <div class="user-details">
        	
        	<div class="input-box">
            <span class="details">Role</span>
            <input type="number" id="role_id" name="Role" placeholder="Enter Role" required>
          </div>
          <div class="input-box">
            <span class="details">Role Name</span>
            <input type="text" id="role_name" name="RoleName" placeholder="Role Name" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" id="first_name" name="FirstName" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" id="last_name" name="LastName" placeholder="Enter your Second Name" required>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <input type="text" id="gender" name="gender" placeholder="Enter your Second Name" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">User ID</span>
            <input type="number" id="user_id" name="user_ID" placeholder="Enter your Usert ID" required>
          </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="Email" placeholder="Enter your email" required>
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
            <input type="number" id="unit_price" name="unit_price" placeholder=" Unit Price" required>
          </div>
          <div class="input-box">
            <span class="details">Available quantity</span>
            <input type="number" id="amount_available" name="amount_available" placeholder="Available quantity" required>
          </div>
        </div>
        <p> <label>Category</label><input type="number" id="category_id" name="category_id" placeholder=" Category ID" required><select name="plan" id="plan">
        <option value="none" class="cage" selected disabled hidden>Select an Category</option>
        <option value="women" id="category_name" name="category_name">women</option>
        <option value="men"id="category_name" name="category_Name">men</option>
        <option value="children"id="category_name" name="category_name">Children</option>
        <option value="gender neutral"id="category_name" name="category_name">Gender Neutral</option>
        <option value="pets"id="category_name" name="category_Name">Pets</option></p>
      
        </select>
        <p><label>Subcategory</label><input type="number" id="subcategory_id" name="subcategory_id" placeholder=" SubCategory ID" required><select name="plan" id="plan">
        <option value="none" selected disabled hidden>Select a Subcategory</option>
        <option value="Data Structures" id="subcategory_id" name="subcategoryID">Formal</option>
        <option value="oop"id="subcategory_id" name="subcategoryID">Casual</option>
        <option value="oop"id="subcategory_id" name="subcategoryID">Sports</option>
      
        </select>
        </p>

        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
