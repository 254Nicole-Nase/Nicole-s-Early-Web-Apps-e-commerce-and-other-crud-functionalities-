<?php
session_start();
if(!empty($_SESSION["Email"])) {
    require_once 'view-dashboard.php';
} else {
    require_once 'Login.php';
}
?>