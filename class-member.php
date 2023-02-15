<?php
namespace Phppot;

use \Phppot\DataSource;

class Member
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function getMemberById($memberId)
    {
        $query = "select * FROM tbl_users WHERE user_id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        
        return $memberResult;
    }
    
    public function processLogin($email, $password) {
        $query = "select * FROM tbl_users WHERE first_name = ? OR email = ?";
        $paramType = "ss";
        $paramArray = array($email, $password);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            $hashedPassword = $memberResult[0]["password"];
            if (password_verify($password, $hashedPassword)) {
                $_SESSION["user_id"] = $memberResult[0]["id"];
                return true;
            }
        }
        return false;
    }
}