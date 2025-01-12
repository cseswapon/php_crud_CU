<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['user_id']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>

        /* scrollbar width 2px */
        ::-webkit-scrollbar {
            width: 2px;
        }
        /* color change */
        ::-webkit-scrollbar-thumb {
            background: #2c5364;
        }

        body {
            overflow-x: hidden;
        }

        header, footer {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
            padding: 2rem 0;
        }

        .nav-link {
            color: #ffffff !important;
            transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #ff6a00 !important;
            text-decoration: underline;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ff6a00;
        }
    </style>
</head>
<body>
<header class="px-4 py-3">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo Section -->
            <div class="col-4 col-md-3">
                <div class="logo">S</div>
            </div>

            <!-- Navigation Menu -->
            <div class="col-4 col-md-6 text-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Home</a>
                    </li>
                    <?php if ($isLoggedIn): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./add.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./studentlist.php">All Students</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- User Section -->
            <div class="col-4 col-md-3 text-end">
                <?php if ($isLoggedIn): ?>
                    <span class="me-3"><i class="fa fa-user" aria-hidden="true"></i>
<?php echo htmlspecialchars($username); ?></span>
                    <a class="btn btn-warning btn-sm" href="./logout.php">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                <?php else: ?>
                    <a class="btn btn-success btn-sm" href="./login.php">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
</body>
</html>
