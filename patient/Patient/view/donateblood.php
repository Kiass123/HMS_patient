<?php
require_once '../model/connect.php';
if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
   $blood=$_POST['blood'];
   
   $con = getConnection();
   $sql="insert into `blood` (username,email,address,phone,blood) 
   values('$username','$email','$address','$phone','$blood')";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/donordb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood Donor Registration</title>
  <style>
body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

#form {
  background-color: #fff;
  max-width: 500px;
  margin: 20px auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #999;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}

a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  display: block;
  margin-top: 10px;
}
* style for link hover */
a:hover {
  color: #4CAF50;
}

  </style>
	<form id="form" name="login" method="POST">
	<img src="../image/blood.png" height="200" width="150"><br>
</head>
<body>
<Style></style>
    <tr>
      <td>
         <label for="username">Username</label><br />
		 <input type="text" name="username" />
      </td>
    </tr><br>
	<tr>
      <td>
        <label for="email">Email</label><br />
        <input type="text" name="email" />
      </td>
    <tr><br>
	<tr>
      <td>
        <label for="address">Address</label><br />
        <input type="text" name="address" />
      </td>
</tr><br>
<tr>
      <td>
         <label for="phone">phone</label><br />
		 <input type="text" name="phone" />
      </td>
    </tr><br>
  <tr>
	<td>
		 <h5>Select your Blood Group</h5>
  <select name="blood">
    <option>Select an option</option>
    <option>O+</option>
    <option>O-</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>AB+</option>
    <option>AB-</option>
    </select>
    </td>
  </tr><hr>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</body>
</html>
<a href="../dashboard.php">Go Back</a>