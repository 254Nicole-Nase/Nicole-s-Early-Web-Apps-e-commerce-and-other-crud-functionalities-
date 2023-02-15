  <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database="e_commerce_test";

      $conn = mysqli_connect($servername , $username , $password, $database);
      
      if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
  
      //execute the SQL query and return records
      //$result = mysql_query("SELECT * FROM table_one ");
      $sql="SELECT Fullname, UserName, User_email, TelNo, pass_wd FROM USERS_TABLE"; 
      $result=$conn -> query($sql);
      if ($result->num_rows > 0) {
  //print_r($result);
  $row=$result->fetch_assoc();
  
}
      ?>
      <table border="2" style= "background-color: #D8BFD8; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Full Name</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Telephone</th>
          <th>Password</th>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        <?php
         require_once("viewdb.php");
       foreach ($test as $key => $value){
         ?>
            <tr>
              <td><?php echo $value ["Fullname"]?></td>
              <td><?php echo $value ["UserName"]?></td>
              <td><?php echo $value ["User_email"]?></td>
              <td><?php echo $value ["TelNo"]?></td>
              <td><?php echo $value ["pass_wd"]?></td>
              <td><a href=viewdb.php?edit = " <?php echo $value["UserName"] ?>">Edit</a></td>"
        <?php }  
       ?>
      </tbody>
    </table>
    
    </body>
    </html>
    <?php
  //To print out all values
//print_r($_POST);For printing everything in an array
//To print out only the required values


require("DBconn1.php");

    

  $productID=($_POST['prodID']);
  echo $productID ."<br>";

  $product_name=($_POST['name']);
  echo $product_name ."<br>";

  $product_description=($_POST['description']);
  echo $product_description ."<br>";

  
  $unit_price=$_POST['unitprice'];
  echo $unit_price ."<br>";

  $quantity=$_POST['availablequantity'];
  echo $quantity ."<br>";

  $category=$_POST['category'];
  echo $category ."<br>";

  $subcategory=$_POST['subcategory'];
  echo $subcategory ."<br>";

  $creation_date=$_POST['creation'];
  echo $creation_date ."<br>";

  $update_date=$_POST['update'];
  echo $update_date ."<br>";


  $user_name=$_POST['addedby'];
  echo $user_name ."<br>";

  $is_deleted=$_POST['isdeleted'];
  echo $is_deleted ."<br>" ;

  $filename=$_FILES["image\"]["name"];
  $tempname = $_FILES["images2"]["tmp_name"];
    $folder = "./images2/" . $filename;
  

  if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
  

  $sql="INSERT INTO TBL_PRODUCT (product_id, product_name, product_description, product_image, added_by, created_at,updated_at, is_deleted) 
VALUES ('$product_id','$product_name','$product_description','$product_image','added_by','$created_at','$updated_at','$is_deleted');
if(mysqli_query( $conn, $sql)){
        echo "Product Registered successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }