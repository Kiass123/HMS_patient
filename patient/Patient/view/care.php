<?php
require_once '../model/connect.php';
if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $repassword=$_POST['repassword'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];

   $con = getConnection();
   $sql="insert into `patient` (username,email,password,repassword,phone,address) 
   values('$username','$email','$password','$repassword','$phone','$address')";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/caredb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html lang="en">
<head>
    <title>Nursing Care</title>
</head>

<body>
<Style></style>

    <div class="signup-content">
        <div class="error"></div>
        <link rel="stylesheet" href="../CSS/style.css">
        <form id="form" name="login" method="POST">
            <h1>Sign Up</h1>
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label><br />
                        <input type="text" name="username" />
                    </td>
                </tr>
                <td>
                    <label for="email">Email</label><br />
                    <input type="email" name="email" />
                </td>
                <tr>
                <tr>
                    <td>
                        <label for="password">Password</label><br />
                        <input type="password" name="password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="repassword">Re-password</label><br />
                        <input type="password" name="repassword" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone</label><br />
                        <input type="text" name="phone" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label><br />
                        <input type="text" name="address" />
                    </td>

                </tr>
            </table><br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
        </form>
</body>
</html>