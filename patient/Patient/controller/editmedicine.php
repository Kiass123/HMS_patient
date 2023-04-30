<?php

include '../model/connect.php';
$id = $_GET['id'];
$con = getConnection();
$sql = "SELECT * FROM `pharmacy` WHERE `id` = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {
  die("User with id $id does not exist.");
}

$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
  $genericname =$_POST['genericname'];
  $dosage =$_POST['dosage'];
  $strength =$_POST['strength'];
  $amount =$_POST['amount'];
  $sql = "UPDATE `pharmacy` SET `genericname` = '$genericname', `dosage` = '$dosage', `strength` = '$strength', `amount` = '$amount' WHERE `id` = $id";   
  $result = mysqli_query($con, $sql);

  // Check if the query was successful
  if ($result) {
    // Set success message
    $msg = "Medicine with id $id has been updated.";
  } else {
    // Set error message
    $msg = "Error updating pharmacy with id $id: " . mysqli_error($con);
  }

  // Redirect back to previous page with message
  header("Location:../model/beacondb.php?msg=" . urlencode($msg));

  exit();
}
?>

<form method="post">
<link rel="stylesheet" href="../CSS/style.css">  <div class="form-group">
    <label for="genericname">Generic Name</label>
    <input type="text" class="form-control" id="genericname" name="genericname" value="<?php echo $row['genericname']; ?>">
  </div>
  <div class="form-group">
    <label for="dosage">Dosage</label>
    <input type="text" class="form-control" id="dosage" name="dosage" value="<?php echo $row['dosage']; ?>">
  </div>
  <div class="form-group">
    <label for="strength">Strength</label>
    <input type="text" class="form-control" id="strength" name="strength" value="<?php echo $row['strength']; ?>">
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $row['amount']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
