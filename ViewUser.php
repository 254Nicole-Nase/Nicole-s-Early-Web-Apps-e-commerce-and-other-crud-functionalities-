<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View User</title>
</head>
<body>
 <table class="table">
 	<thead>
 		<th>Full Name</th>
 		<th>User Name</th>
 		<th>User Email</th>
 		<th>Telephone Num</th>
 		<th>Password</th>
 		<th>Action</th>
 	</thead>
  <tbody>
  	<?php
       require_once("viewdb.php");
       foreach ($test as $key => $value){
       while( $row=$result->fetch_assoc($result)){
       	echo "
  	?>
  	<tr><?php echo $value["Fullname"] ?></tr>
  	<tr><?php echo $value["UserName"] ?></tr>
  	<tr><?php echo $value["User_email"] ?></tr>
  	<tr><?php echo $value["TelNo"] ?></tr>
  	<tr><?php echo $value["pass_wd"] ?></tr>
  	<tr><a href="viewdb.php?edit =  <?php echo $value["Fullname"] ?>View</a></tr>
  	<?php } ""}?>
  </tbody>

 </table>



</body>
</html>