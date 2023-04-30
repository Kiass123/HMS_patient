<?php
include 'connect.php';
if (isset($_GET['msg'])) {
    $msg = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);
    echo "<div class='alert alert-success'>$msg</div>";
  }
  ?>
  <html lang="en">
  <head>
      <title>Medicine List</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  </head>
  <body>
  
      <div class="container">
<head>
    <title>Medicine List</title>
</head>
<body>
  

<table class="table table-striped table-bordered" border="1">
  <thead>
  <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Brand Name</th>
        <th>Dosage</th>
        <th>Strength</th>
        <th>Amount</th>
        <th>Operation</th>
    </tr>
  </thead> 
  <tbody>
    <?php
      $con = getConnection();
      $sql="select * from `pharmacy`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["genericname"] . "</td>";
        echo "<td>" . $row["brandname"] . "</td>";
        echo "<td>" . $row["dosage"] . "</td>";
        echo "<td>" . $row["strength"] . "</td>";
        echo "<td>" . $row["amount"] . "</td>";
        echo "<td><a href='../controller/editmedicine.php?id=" . $row["id"] . "'>Edit</a> | <a href='../controller/deletemedicine.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="../view/dashboard.php">Back</a></button>

</body>
</html>
