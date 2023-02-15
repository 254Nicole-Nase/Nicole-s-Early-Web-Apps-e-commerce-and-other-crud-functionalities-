<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="Registration.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<h1>  SUB-CATEGORY ADDITION </h1>

<div class="container">
<div class="column">
  
  
    <form action="SubCategoryDB.php" method="post">
    <h3>ADD SUB-CATEGORY</h3>
    <div class="input-box"><input type="text" name="SubCategory_ID" id="SubCategory_ID"  class="input-box" placeholder="SubCategory ID" ></div>
    

    <div class="input-box"><input type="text" name="SubCategory_Name" id="SubCategory_Name"  class="input-box" placeholder="Category Name"></div>
    <div class="input-box"><input type="text" name="Category_ID" id="Category_ID"  class="input-box" placeholder="Category ID" ></div>

  
  <!--<input type="submit" name="submit" class="btn">-->
  <button class="btn">Add SubCategory</button>
  </form>
</div>
</div>
      

</body>
</html>
