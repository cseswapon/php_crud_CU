<?php
    include('../config/db.config.php');
    $sql = "SELECT * FROM student";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        die("ERROR: Could not execute $sql. " . mysqli_error($db));
    }
    
    if (isset($_POST['edit_id'])) {
        $edit_id = mysqli_real_escape_string($db, $_POST['edit_id']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        include('../model/studentlist.php');
        updateStudent($db, $edit_id, $name, $address, $phone);
    }

    if (isset($_POST['delete_id'])) {
        $delete_id = mysqli_real_escape_string($db, $_POST['delete_id']);
        include('../model/studentlist.php');
        deleteStudent($db, $delete_id);
    }
?>
