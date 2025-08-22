<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schoolizer - School Management System</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Isotope (filter + layout) -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <!-- Magnific Popup (lightbox) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup/dist/magnific-popup.css">
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <!-- GLightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>


    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container rounded" style="background-color: var(--primary-color);">
    <a class="navbar-brand fw-bold text-white" href="index.php">
      <img src="assets/images/schoolizer-logo.png" 
          alt="Schoolizer Logo" 
          height="40" 
          class="me-2 p-1 rounded" 
          style="background:#fff;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#schoolNavbar" aria-controls="schoolNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="schoolNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link text-white active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="admission.php">Admission</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="notices.php">Notices</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="events.php">Events</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact</a></li>
      </ul>

      <div class="d-flex ms-lg-3">
        <a href="login.php" class="btn button">Login</a>
      </div>
    </div>
  </div>
</nav>

<script>
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar-custom');
    if (window.scrollY > 50) { // offset in px when it appears
      navbar.classList.add('active');
    } else {
      navbar.classList.remove('active');
    }
  });
</script>

