<?php
    include('../config/db.config.php');

    $sql = "INSERT INTO student (name, address, phone_number) VALUES ('$name', '$address', '$phone')";

    if (mysqli_query($db, $sql)) {
        header("Location: ../view/home.php"); 
        echo "<div class='alert alert-success'>New record created successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($db) . "</div>";
    }
?>