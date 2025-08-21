<?php include("includes/header.php"); ?>

<section class="padding d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="register-card bg-white p-4 p-md-5 rounded shadow-sm" style="max-width: 500px; width: 100%;">

    <h2 class="text-center mb-4" style="color: var(--primary-color);">Create Account</h2>

    <form action="process-register.php" method="POST">
      <!-- Full Name -->
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name" required>
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
      </div>

      <!-- Role -->
      <div class="mb-3">
        <label for="role" class="form-label">Register As</label>
        <select class="form-select" id="role" name="role" required>
          <option value="" disabled selected>Select Role</option>
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Optional Student Parent Info -->
      <div class="mb-3" id="parentInfo" style="display: none;">
        <label for="parentName" class="form-label">Parent / Guardian Name</label>
        <input type="text" class="form-control" id="parentName" name="parentName" placeholder="Enter parent/guardian name">
      </div>

      <div class="d-grid mt-3">
        <button type="submit" class="btn button btn-lg w-100">Register</button>
      </div>
    </form>

    <div class="mt-3 text-center">
      Already have an account? <a href="login.php">Login here</a>
    </div>

  </div>
</section>

<?php include("includes/footer.php"); ?>
