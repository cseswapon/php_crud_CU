<?php
    include('../controller/checkLogin.php');
    include('../controller/allusers.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List | University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('../shared/header.php'); ?>
    <?php if (mysqli_num_rows($result) > 0)  { ?>
    <main class="container my-5 py-5">
        <h2 class="mb-4 text-center">User List</h2>

        <table class="table table-striped text-center shadow-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['email']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
    <?php } else { ?>
       <div class="container text-center text-danger my-5">
           <i class="fa fa-ban" aria-hidden="true"></i> No Data <i class="fa fa-ban" aria-hidden="true"></i>
        </div>
    <?php } ?>

    <?php include('../shared/footer.php'); ?>
</body>
</html>
