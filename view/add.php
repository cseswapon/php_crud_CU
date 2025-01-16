<?php
    include('../controller/checkLogin.php');
    include('../controller/add.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student | City University</title>
</head>
<body>
    <?php include('../shared/header.php') ?>

    <main class="my-5 py-5 container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h2 class="mb-4">Add Student</h2>
                <form action="../controller/add.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100  ">Submit</button>
                </form>
            </div>
        </div>
    </main>
    
    <?php include('../shared/footer.php') ?>
</body>
</html>
