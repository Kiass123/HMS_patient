<?php

include '../model/connect.php';
// Retrieve the ID value from the URL parameter
$id = $_GET['id'];


// Build the SELECT query
$sql = "SELECT * FROM `patient` WHERE `id` = $id";

// Execute the query
$result = mysqli_query($con, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result) == 0) {
  // Output error message and exit script
  die("User with ID $id does not exist.");
}

// Retrieve the patient data
$row = mysqli_fetch_assoc($result);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Retrieve and sanitize the form data
  $name =$_POST['name'];
  $email =$_POST['email'];
  $address =$_POST['address'];

  // Build the UPDATE query
  $sql = "UPDATE `patient` SET `email` = '$email', `address` = '$address' WHERE `id` = $id";

  // Execute the query
  $result = mysqli_query($con, $sql);

  // Check if the query was successful
  if ($result) {
    // Set success message
    $msg = "Patient with ID $id has been updated.";
  } else {
    // Set error message
    $msg = "Error updating patient with ID $id: " . mysqli_error($con);
  }

  // Redirect back to previous page with message
  header("Location: caredb.php?msg=" . urlencode($msg));

  exit();
}
?>

<form method="post">
<Style></style>
  <div class="form-group">
    <label for="email">Email</label>
    <link rel="stylesheet" href="../CSS/style.css">
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
