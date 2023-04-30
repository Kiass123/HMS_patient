<?php
include '../model/connect.php';

if (isset($_GET['msg'])) {
  $msg = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);
  echo "<div class='alert alert-success'>$msg</div>";
}
?>
<html lang="en">
<head>
    <title>Available Blood</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
  table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
  margin-bottom: 20px;
}

 .container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

table {
  width: 100%;
  margin-bottom: 20px;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border: 1px solid #2F4F4F;
}

th {
  background-color: #2F4F4F;
}

button {
  margin-bottom: 20px;
}

a {
  color: #2F4F4F;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

</style>
    <div class="container">
        <button>Available Blood<br><br>
<table class="table table-striped table-bordered" border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Blood Group</th>
      <th>Operation</th>
    </tr>
  </thead> 
  <tbody>
    <?php

      $con = getConnection();
      $sql="select * from `blood`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["blood"] . "</td>";
        echo "<td><a href='selectblood.php?id=" . $row["id"] . "'>Select</a></td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="dashboard.php">Back</a></button><br><br>
</body>
</html>
