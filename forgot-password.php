<?php include("includes/header.php"); ?>

<section class="padding d-flex justify-content-center align-items-center" style="min-height: 80vh; background-image: url('./assets/images/about-hero.jpg'); background-size: cover; background-position: center; position: relative; min-height: 60vh;">
    <div class="overlay" style="position: absolute; inset: 0; background: rgba(12, 57, 88, 0.7);"></div>

  <div class="forgot-card bg-white p-4 p-md-5 rounded shadow-sm" style="max-width: 500px; z-index: 10; width: 100%;">
    
    <h2 class="text-center mb-4" style="color: var(--primary-color);">Forgot Password</h2>
    <p class="text-center mb-4 text-muted">Enter your email address to reset your password.</p>

    <form action="process-forgot-password.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your registered email" required>
      </div>

      <div class="d-grid mb-3">
        <button type="submit" class="btn button w-100">Send Reset Link</button>
      </div>
    </form>

    <div class="text-center mb-2">
      <a href="login.php">Back to Login</a>
    </div>

    <div class="text-center">
      Don't have an account? <a href="register.php">Register now</a>
    </div>

  </div>
</section>

<?php include("includes/footer.php"); ?>
