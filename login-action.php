<?php
namespace Phppot;

use \Phppot\Member;
if (! empty($_POST["Login"])) {
    session_start();
    $username = filter_var($_POST["Email"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["pass_wd"], FILTER_SANITIZE_STRING);
    require_once ("class-member.php");
    
    $member = new Member();
    $isLoggedIn = $member->processLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("index-log.php");
    exit();
}
