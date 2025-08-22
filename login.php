<?php include("includes/header.php"); ?>

<section class="padding d-flex justify-content-center overlay align-items-center" style="min-height: 80vh; background-image: url('./assets/images/about-hero.jpg'); background-size: cover; background-position: center; position: relative; min-height: 60vh;">
  <div class="overlay" style="position: absolute; inset: 0; background: rgba(12, 57, 88, 0.7);"></div>

  <div class="login-card bg-white p-4 p-md-5 rounded shadow-sm" style="max-width: 500px; z-index: 10; width: 100%;">

    <h2 class="text-center mb-4" style="color: var(--primary-color);">Schoolizer Login</h2>

    <form action="dashboard.php" method="POST">

      <!-- Role Selection -->
      <div class="mb-3 role-select">
        <label for="role" class="form-label">Select Role</label>
        <select class="form-select" id="role" name="role" required>
          <option value="" disabled selected>Choose your role</option>
          <option value="admin">Admin</option>
          <option value="teacher">Teacher</option>
          <option value="student">Student</option>
        </select>
      </div>

      <!-- Email/Username -->
      <div class="mb-3">
        <label for="email" class="form-label">Email / Username</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <!-- Submit Button -->
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-login btn-lg w-100">Login</button>
      </div>

      <!-- Forgot Password -->
      <div class="text-center mb-2">
        <a href="forgot-password.php">Forgot Password?</a>
      </div>

      <!-- Register Link -->
      <div class="text-center">
        Don't have an account? <a href="register.php">Register now</a>
      </div>

    </form>
  </div>
</section>

<?php include("includes/footer.php"); ?>
