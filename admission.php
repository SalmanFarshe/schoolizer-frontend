<?php include("includes/header.php"); ?>
<!-- About Hero Section -->
<section class="hero-section padding" style="background-image: url('./assets/images/about-hero.jpg'); background-size: cover; background-position: center; position: relative; min-height: 60vh;">
  <div class="overlay" style="position: absolute; inset: 0; background: rgba(12, 57, 88, 0.7);"></div>
  <div class="container h-100 d-flex align-items-center justify-content-center">
    <div class="text-center text-white" data-aos="fade-up">
      <h1 class="display-4 fw-bold">Admission Schoolizer</h1>
      <p class="lead mt-3">Empowering students with modern education and innovative learning.</p>
      <!-- <a href="admission.php" class="btn button btn-lg mt-3">Apply Now</a> -->
    </div>
  </div>
</section>

<!-- Admission Form Section -->
<section class="admission-section padding py-5">
  <div class="container">
    <h2 class="display-5 fw-bold mb-4 text-primary" data-aos="fade-up">Admission Form</h2>

    <form action="process-admission.php" method="POST" class="bg-white p-4 rounded shadow-sm" data-aos="fade-up" data-aos-delay="100">

      <!-- Student Info -->
      <h5 class="fw-bold mb-3">Student Information</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name" required>
        </div>
        <div class="col-md-6">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="col-md-6">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" id="gender" name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="grade" class="form-label">Applying For Grade</label>
          <select class="form-select" id="grade" name="grade" required>
            <option value="" disabled selected>Select Grade</option>
            <option value="nursery">Nursery</option>
            <option value="kg">Kindergarten</option>
            <option value="1">Grade 1</option>
            <option value="2">Grade 2</option>
            <option value="3">Grade 3</option>
            <!-- Add more grades as needed -->
          </select>
        </div>
      </div>

      <hr class="my-4">

      <!-- Parent/Guardian Info -->
      <h5 class="fw-bold mb-3">Parent / Guardian Information</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="parentName" class="form-label">Parent/Guardian Name</label>
          <input type="text" class="form-control" id="parentName" name="parentName" placeholder="Enter parent/guardian name" required>
        </div>
        <div class="col-md-6">
          <label for="relationship" class="form-label">Relationship</label>
          <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Father / Mother / Other" required>
        </div>
        <div class="col-md-6">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="+8801XXXXXXXXX" required>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Parent's email" required>
        </div>
        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter your full address" required></textarea>
        </div>
      </div>

      <hr class="my-4">

      <!-- Previous Academic Info -->
      <h5 class="fw-bold mb-3">Previous Academic Information</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="prevSchool" class="form-label">Previous School Name</label>
          <input type="text" class="form-control" id="prevSchool" name="prevSchool" placeholder="Enter previous school">
        </div>
        <div class="col-md-6">
          <label for="prevGrade" class="form-label">Last Grade Completed</label>
          <input type="text" class="form-control" id="prevGrade" name="prevGrade" placeholder="Grade / Class">
        </div>
        <div class="col-md-6">
          <label for="prevYear" class="form-label">Year Completed</label>
          <input type="text" class="form-control" id="prevYear" name="prevYear" placeholder="YYYY">
        </div>
        <div class="col-md-6">
          <label for="certificate" class="form-label">Upload Certificate (Optional)</label>
          <input type="file" class="form-control" id="certificate" name="certificate" accept=".pdf,.jpg,.png">
        </div>
      </div>

      <hr class="my-4">

      <!-- Additional Info -->
      <div class="mb-3">
        <label for="notes" class="form-label">Additional Notes</label>
        <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Any additional information"></textarea>
      </div>

      <!-- Submit Button -->
      <div class="d-grid mt-3">
        <button type="submit" class="btn button">Submit Admission</button>
      </div>
    </form>
  </div>
</section>

<?php include("includes/footer.php"); ?>
