<?php 
    require_once('../model/connect.php');

    function auth($email, $password){

        $con = getConnection();
        $sql = "select * from patient where username='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count > 0){
            // echo "working!";
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into patient VALUES ( '{$user['username']}','{$user['email']}','{$user['password']}','{$user['repassword']}','{$user['phone']}','{$user['address']}','{$user['id']}')";
        $result = mysqli_query($con, $sql);
        return $result;
        }
        
?>