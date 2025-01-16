<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: ../view/login.php");
        exit();
    }

    include('../model/login.php');

    mysqli_stmt_close($stmt);
    header("Location: ../view/login.php");
    exit();
}
?>
