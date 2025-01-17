<?php
    include('../config/db.config.php');

    $sql = "SELECT * FROM user";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        die("ERROR: Could not execute $sql. " . mysqli_error($db));
    }
?>
