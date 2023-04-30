<?php
require_once '../model/connect.php';
if(isset($_POST['submit'])){
   $number=$_POST['number'];
   $pin=$_POST['pin'];
   $amount=$_POST['amount'];

   $sql="insert into `payment` (number,pin,amount) 
   values('$number','$pin','$amount')";
   $con = getConnection();
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/bkashdb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html>
    <body>
    <Style></style>
    <form method="post" action="" enctype="">
    <div class="Payment"></div>
    <a href="./dashboard.php">Go Back</a>   <link rel="stylesheet" href="../CSS/style.css">

    <h4><u> Payment Procedure</u></h4>                         
<tr>
  <td><label for="text">Enter Your Account Number</label></td><br>
  <td><input type="text" name="number" id="number" placeholder="Enter your account number"></td>
</tr>
<br><hr>
<tr>
  <td><label for="text">Enter your Pin</label></td><br>
  <td><input type="text" name="pin" id="pin" placeholder="Enter your account number"></td>
</tr>
<br><hr>
<tr>
  <td><label for="text">Enter Amount</label></td><br>
  <td><input type="text" name="amount" id="amount" placeholder="Enter Amount"></td>
    </tr><br><hr>
     <tr>
        <td>        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>  
        </td>
     </tr>
      </form>
   </body>
</html>