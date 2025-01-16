<?php
    include('../config/db.config.php');
    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashPassword')";
    if (mysqli_query($db, $sql)) {
        header("Location: ../view/login.php");
        echo "<div class='alert alert-success'>New record created successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($db) . "</div>";
    }
?>