<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UnIvErSiTy | Swapon Saha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./style/home.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg position-sticky w-100 top-0 start-0 z-index-10">
    <div class="container-fluid px-5">
      <a class="navbar-brand fs-1" href="./">UnIvErSiTy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light bg-warning px-4 btn btn-glow" href="./view/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="hero-section">
    <div class="container">
      <img class="img-thumbnail mb-3" src="./images/image.png" width="200" alt="swapon image">
      <h1 class="font-weight-bold">PHP CRUD Application</h1>
      <p class="mb-3">Develop by <a href="https://personal-web-sk.web.app/" target="_blank" rel="noopener noreferrer">Swapon Saha.</a></p>
      <a href="https://github.com/cseswapon/php_crud_CU" target="_blank" class="btn btn-glow">
        <i class="bi bi-github"></i> GitHub Repository
      </a>
    </div>
  </section>
  <section class="features">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-lightning-charge-fill"></i>
            <h5>Fast Performance</h5>
            <p>Experience blazing-fast speeds for all your tasks.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-shield-fill-check"></i>
            <h5>Secure</h5>
            <p>Top-notch security for a safe and reliable experience.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-gear-fill"></i>
            <h5>Customizable</h5>
            <p>Adapt the platform to meet your unique needs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <p class="my-0 py-0">&copy; Swapon Saha <?php echo date('Y');?>. All Rights Reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
