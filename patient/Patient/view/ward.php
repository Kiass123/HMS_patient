<?php
require_once '../model/connect.php';
if(isset($_POST['submit'])){
  $seat=$_POST['seat'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $disease=$_POST['disease'];

  $con = getConnection();
   $sql="insert into `ward` (seat,name,email,disease) 
   values('$seat','$name','$email','$disease')";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/warddb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html>
<head>
    <title>Seat Booking Form</title>
       <a href="./dashboard.php">Go Back</a>
</head>
<body>
<link rel="stylesheet" href="../CSS/style.css">
    <h1>Seat Booking Form</h1>
    <form>
                  <tr>
                    <td><label for="text"><form>Available Seat:</label></td>
                    <td><select name="seat" id="seat">
                            <option value="">10</option>
                            <option value="">19</option>
                            <option value="">21</option>
                            <option value="">22</option>
                            <option value="">11</option>
                            <option value="">16</option>
                            <option value="">12</option>
                            <option value="">24</option>

                        </select></td><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="disease">Disease :</label>
        <input type="disease" name="disease"><br><br>
<tr>
  <td>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </td>
</tr>
</form>
</body>
</html>
