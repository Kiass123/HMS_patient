<?php 
    session_start();
    require_once('../model/userModel.php');
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $repassword = $_REQUEST['repassword'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];

        if($username == "" && $email == ""  && $password == "" && $repassword == "" && $phone == "" && $address == ""){
            echo "null data found...";
        }else{

            $user = [
                'username'=>$username, 
                'email'=> $email,
                'password'=> $password,
                'repassword'=> $repassword,
                'phone'=> $phone,
                'address'=> $address
            ];
            $status = addUser($user);
            
            if($status){
                header('location: ../view/login.php');
            }else{
                echo "DB error, please try again";
            }
        }
    
    }else{
        
        header('location: ../view/login.php');
    }

?>