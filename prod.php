  <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
      <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database="e_commerce";

      $conn = mysqli_connect($servername , $username , $password, $database);
      
      if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
  
      //execute the SQL query and return records
      //$result = mysql_query("SELECT * FROM table_one ");
 
      $sql="SELECT product_name, product_image,Product_description, Unit_price , Available_quantity, category_id, subcategory_id FROM product"; 
      $result=$conn -> query($sql);
      if ($result->num_rows > 0) {
  //print_r($result);
  $row=$result->fetch_assoc();
  
}
      ?>
      <table  data-vertable="ver6"border="2" style= "background-color: #D8BFD8; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr class="row100-head">
          <th>Product id</th>
          <th>Product Name</th>
          <th>Product Description</th>
          <th>Product Image</th>
          <th>Unit Price</th>
          <td>Available quantity</td>
        </tr>
      </thead>
      <tbody>
        <?php
         require_once("viewproduct.php");
       foreach ($test as $key => $value){
         ?>
            <tr class="row100">
              <td><?php echo $value ["Product_ID"]?></td>
              <td><?php echo $value ["product_name"]?></td>
              <td><?php echo $value ["Product_description"]?></td>
              <td><?php echo "<img src='images/".$value['product_image']."' >"; ?></td>
              <td><?php echo $value ["Unit_price"]?></td>
              <td><?php echo $value ["Available_quantity"]?></td>
              <td><a href=viewproduct.php?edit = " <?php echo $value["Product_ID"] ?>">Edit</a></td>"
              <td><a href=http://localhost/one-page-checkout-script-free-with-example-template-in-php/?edit = " <?php echo $value["Product_ID"] ?>">Checkout</a></td>"
        <?php }  
       ?>
       <input type="submit" name="Add Product">
      </tbody>
    </table>
    
    </body>
    </html>