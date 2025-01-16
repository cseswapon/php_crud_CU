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
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>
                                        <p class="card-text mb-0">With supporting text below as a natural lead-in to additional content.</p>
                                        <p>Phone: <a href="tel:' . htmlspecialchars($row['phone_number']) . '">' . htmlspecialchars($row['phone_number']) . '</a></p>
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
