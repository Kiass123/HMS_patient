<?php 
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){
        
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        if($email == "" && $password == ""){
            echo "null data found...";
        }else{

           $result = auth($email, $password);
           echo $result;
            if($result){
                $_SESSION['flag'] = "true";
                header('location:../view/dashboard.php');
            }else{
                echo "invalid user";
            }
        }
    
    }else{       
        header('location: ../view/dashboard.php');
    }

?>