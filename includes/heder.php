<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schoolizer - School Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: var(--primary-color);">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="index.php">
      <img src="assets/images/schoolizer-logo.png" alt="School Logo" width="150" class="d-inline-block align-text-top">
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

      <!-- Login Button -->
      <div class="d-flex ms-lg-3">
        <a href="login.php" class="btn" style="background-color: var(--accent-color); color: var(--text-color);">Login</a>
      </div>
    </div>
  </div>
</nav>

