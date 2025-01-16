<?php
    include('../config/db.config.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        include('../model/add.php');
    }
?>
