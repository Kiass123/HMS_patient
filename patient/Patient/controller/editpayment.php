<?php
include '../model/connect.php';
$id = $_GET['id'];
$con = getConnection();
$sql = "SELECT * FROM `payment` WHERE `id` = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {
  die("User with id $id does not exist.");
}

$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
  $number =$_POST['number'];
  $amount=$_POST['amount'];
  $sql = "UPDATE `payment` SET `number` = '$number', `amount` = '$amount' WHERE `id` = $id";   
  $result = mysqli_query($con, $sql);

  if ($result) {
    $msg = "Number with id $id has been updated.";
  } else {
    $msg = "Error updating Number with id $id: " . mysqli_error($con);
  }
  header("Location: ../model/bkashdb.php?msg=" . urlencode($msg));
  exit();
}
?>

<form method="post">
<link rel="stylesheet" href="../CSS/style.css">
  <div class="form-group">
    <label for="number">Name</label>
    <input type="text" class="form-control" id="number" name="number" value="<?php echo $row['number']; ?>">
  </div>
  <div class="form-group">
    <label for="amount">Number</label>
    <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $row['amount']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
