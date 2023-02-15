<?php
namespace Phppot;

use \Phppot\Member;

if (! empty($_SESSION["User_id"])) {
    require_once 'class-member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["Email"]);
    if(!empty($memberResult[0]["first_name"])) {
        $displayName = ucwords($memberResult[0]["first_name"]);
    } else {
        $displayName = $memberResult[0]["last_name"];
    }
}
?>
<html>
<head>
<title>User Login</title>
<style>
body {
	font-family: Arial;
	color: #333;
	font-size: 0.95em;
}

.dashboard {
	background: #d2edd5;
	margin: 15px auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 30px;
	max-width: 400px;
	border: #c8e0cb 1px solid;
	text-align: center;
}

a.logout-button {
	color: #09f;
}
.profile-photo {
    width: 100px;
    border-radius: 50%; 
}
</style>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="member-dashboard">
            <p>Welcome <b><?php echo "$displayName"; ?>!</b></p>
            <p><?php echo $memberResult[0]["user_id"]; ?></p>
            
            <!--<p><img src="./view/images/photo.jpeg" class="profile-photo" /></p>-->
            <p>You have successfully logged in!</p>
            <p>Click to <a href="logout.php" class="logout-button">Logout</a></p>
            </div>
        </div>
    </div>
</body>
</html>