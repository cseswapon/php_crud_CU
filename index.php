<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gradient Dark Theme</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #121212;
      color: #ffffff;
    }

    .navbar {
      background: rgba(0, 0, 0, 0.8);
    }

    .navbar-brand {
      font-weight: bold;
      background: linear-gradient(90deg, #ff6a00, #ee0979);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-section {
      height: 53vh;
      background: linear-gradient(135deg, black, black, black);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 3rem;
      background: linear-gradient(90deg, #ff6a00, #ee0979);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-section p {
      font-size: 1.2rem;
      color: #bbb;
    }

    .btn-glow {
      color: #fff;
      border: none;
      padding: 0.8rem 2rem;
      font-size: 1rem;
      background: linear-gradient(90deg, #ff6a00, #ee0979);
      border-radius: 50px;
      box-shadow: 0 0 20px rgba(255, 106, 0, 0.5);
      transition: all 0.3s ease-in-out;
    }

    .btn-glow:hover {
      box-shadow: 0 0 30px rgba(255, 106, 0, 0.8);
      transform: scale(1.05);
    }

    .features {
      padding: 4rem 0;
      background: #1b1b1b;
    }

    .feature-box {
      text-align: center;
      padding: 2rem;
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* .feature-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      background: linear-gradient(135deg, #0f2027, #203a43);
    } */

    .feature-box i {
      font-size: 2rem;
      color: #ff6a00;
      margin-bottom: 1rem;
    }

    .footer {
      padding: 1.5rem 0;
      color:white;
      background: linear-gradient(135deg, #1b1b1b40);
      text-align: center;
    }

    .footer p {
      color: #bbb;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand fs-1" href="#">S</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light bg-warning px-4 btn btn-glow" href="./login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Welcome to the CRUD Application</h1>
      <p>Your one-stop solution for everything tech and beyond.</p>
      <a href="https://personal-web-sk.web.app/" target="_blank" class="btn btn-glow"><< Portfolio >></a>
    </div>
  </section>

  <!-- Features Section -->
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

  <!-- Footer -->
  <footer class="footer">
    <p class="my-0 py-0">&copy; Swapon Saha <?php echo date('Y');?>. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
