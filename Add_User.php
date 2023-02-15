<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="add_products.css">
</head>
<body>
<!-- Defining the navigation menu -->
<h1>  USER ADDITION </h1>
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
  
  
    <form action="Add_UserDB.php" method="post" enctype="multipart/form-data">
    <h3>ADD USER DETAILS</h3>

    <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" id="first_name" name="FirstName" placeholder="Enter your First name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" id="last_name" name="LastName" placeholder="Enter your Second Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email" name="Email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <input type="text" id="gender" name="gender" placeholder="Enter your Gender" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <!--<div class="input-box">
            <span class="details">User ID</span>
            <input type="number" id="user_id" name="user_ID" placeholder="Enter your Usert ID" required>
          </div>-->
          
          
  
  
  <input type="submit" name="submit" class="btn" value="Add ">
</form>

</div>
</div>
</body>
</html>