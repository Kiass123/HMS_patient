<?php
include 'connect.php';

    $id = $_GET["id"];
    $sql = "SELECT `id`, `username`, `email`, `address`, `phone`, `blood` FROM `blood` WHERE `id` = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
    $msg = "User with ID $id has been deleted.";
    } else {
    $msg = "Error Selecting user with ID $id: " . mysqli_error($con);
    }
    echo "Selected person got a notification for donate blood"
    ?>