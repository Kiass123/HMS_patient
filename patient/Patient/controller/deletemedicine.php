<?php
include '../model/connect.php';

    $id = $_GET["id"];
    $con = getConnection();
    $sql = "DELETE FROM `pharmacy` WHERE `id` = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
    $msg = "User with ID $id has been deleted.";
    } else {
    $msg = "Error deleting user with ID $id: " . mysqli_error($con);
    }
    header("Location: ../model/beacondb.php?msg=" . urlencode($msg));
    exit();
    ?>