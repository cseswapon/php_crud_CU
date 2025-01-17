<?php
    $student = "SELECT * FROM student";
    $studentResult = mysqli_query($db, $student);

    $user = "SELECT * FROM user";
    $userResult = mysqli_query($db, $user);

    $totalUsers = mysqli_num_rows($userResult);
    $totalStudents = mysqli_num_rows($studentResult);

    if (!$studentResult || !$userResult) {
        die("ERROR: Could not execute $sql. " . mysqli_error($db));
    }


?>