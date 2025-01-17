<?php
    include('../controller/checkLogin.php');
    include('../controller/studentlist.php');
    include('../controller/count.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .carousel-item img {
            height: 70vh !important;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php include('../shared/header.php'); ?>
    <div id="homeCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/1.webp" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to University</h5>
                    <p>Explore the bright future with us!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/2.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Innovative Education</h5>
                    <p>Empowering students to achieve greatness.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container text-center my-5">
        <h2 class="mb-4">Why Choose University?</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <i class="fas fa-graduation-cap fs-1 text-primary mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Quality Education</h5>
                        <p class="card-text">Learn from the best faculty with years of experience.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <i class="fas fa-globe fs-1 text-success mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Global Opportunities</h5>
                        <p class="card-text">Connect with international networks and programs.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <i class="fas fa-user-friends fs-1 text-danger mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Supportive Community</h5>
                        <p class="card-text">Enjoy a campus culture that supports and inspires.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (mysqli_num_rows($result) > 0)  { ?>
        <main class="container my-5 py-5">
            <h2 class="text-center mb-4">Meet Our Students</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="col">
                                <div class="card text-center shadow-sm p-3 bg-body-tertiary rounded border-0">
                                    <div class="card-body">
                                        <i class="fas fa-user-circle fs-2 text-primary mb-3"></i>
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
     <?php } else { ?>
        <div class="container text-center text-danger my-5">
           <i class="fa fa-ban" aria-hidden="true"></i> No Data <i class="fa fa-ban" aria-hidden="true"></i>
        </div>
    <?php } ?>
     <div class="container text-center my-5">
        <h2 class="mb-4">University Statistics</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100 border-0 shadow-sm bg-primary text-white">
                    <div class="card-body">
                        <i class="fas fa-users fs-1 mb-3"></i>
                        <h5 class="card-title fw-bold">Total Users</h5>
                        <p class="card-text fs-4"><?php echo $totalUsers; ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm bg-success text-white">
                    <div class="card-body">
                        <i class="fas fa-user-graduate fs-1 mb-3"></i>
                        <h5 class="card-title fw-bold">Total Students</h5>
                        <p class="card-text fs-4"><?php echo $totalStudents; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../shared/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
