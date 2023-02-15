<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="Login.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div>
  <div class="container">
    <div class="title">Login </div>
    <div class="content">
      <form action="view-dashboard.php" method="post" id="frmLogin"
      onSubmit="return validate();">
      <?php
                if (isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="Email" name="Email" placeholder="Enter your email" required>
          </div>
          
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="pass_wd" name="pass_wd" placeholder="Enter your password" required>
          </div>
          
        </div>
        
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="button">
          <input type="submit" name="Login" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="http://localhost/ecommerce_clothes_2A/Registration.php">Signup now</a></div>
      </form>
    </div>
  </div>
</body>
</div>
<script>
    function validate() {
        var $valid = true;
        document.getElementById("Email").innerHTML = "";
        document.getElementById("pass_wd").innerHTML = "";
        
        var email = document.getElementById("Email").value;
        var password = document.getElementById("pass_wd").value;
        if(first_name == "") 
        {
            document.getElementById("Email").innerHTML = "required";
          $valid = false;
        }
        if(password == "") 
        {
          document.getElementById("pass_wd").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>
</html>
