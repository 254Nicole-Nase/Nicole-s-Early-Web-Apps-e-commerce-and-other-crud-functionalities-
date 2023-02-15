<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="Registration.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="process_register.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" id="Fullname" name="Fullname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Second Name</span>
            <input type="text" id="UserName" name="UserName" placeholder="Enter your Second Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="user_email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="Tel_no" name="TelNo" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="pwd" name="pass_wd" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="pwd" name="pwd" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender1" id="dot-1">
          <input type="radio" name="gender2" id="dot-2">
          <input type="radio" name="gender3" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category" id="gender" name="user_gender">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
