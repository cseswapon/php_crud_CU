<?php
    include('../controller/checkLogin.php');
    include('../controller/studentlist.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | City University</title>
</head>
<body>
    <?php include('../shared/header.php') ?>
        <main class="my-5 py-5 container">
            <div class="row row-cols-1 row-cols-md-3 g-4 space-y-2">
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="col-sm-4">
                                <div class="card text-center shadow-sm p-3 bg-body-tertiary rounded border-0">
                                    <div class="card-body">
                                        <div class="icon-container mb-3">
                                            <i class="fa fa-user fs-2 rounded-circle bg-gradient-primary" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="card-title fw-bold text-primary">' . htmlspecialchars($row['name']) . '</h5>
                                        <p class="card-text text-secondary mb-2">' . htmlspecialchars($row['address']) . '</p>
                                        <p class="text-muted mb-3">Phone: <a href="tel:' . htmlspecialchars($row['phone_number']) . '" class="text-decoration-none text-dark fw-semibold">' . htmlspecialchars($row['phone_number']) . '</a></p>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
        </main>
   <?php include('../shared/footer.php') ?>
</body>
</html>
