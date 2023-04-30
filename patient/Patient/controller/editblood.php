<?php
include '../model/connect.php';
$id = $_GET['id'];
$con = getConnection();
$sql = "SELECT * FROM `blood` WHERE `id` = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {
  die("User with id $id does not exist.");
}

$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
  $username =$_POST['username'];
  $email=$_POST['email'];
  $address =$_POST['address'];
  $phone =$_POST['phone'];
  $sql = "UPDATE `blood` SET `username` = '$username', `email` = '$email', `address` = '$address', `phone` = '$phone' WHERE `id` = $id";   
  $result = mysqli_query($con, $sql);

  if ($result) {
    $msg = "Blood with id $id has been updated.";
  } else {
    $msg = "Error updating Blood with id $id: " . mysqli_error($con);
  }
  header("Location: ../model/donordb.php?msg=" . urlencode($msg));
  exit();
}
?>

<form method="post">
<link rel="stylesheet" href="../CSS/style.css">
  <div class="form-group">
    <label for="username">Name</label>
    <input type="text" class="form-control" id="username" name="genericname" value="<?php echo $row['username']; ?>">
  </div>
  <div class="form-group">
    <label for="email">Dosage</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
