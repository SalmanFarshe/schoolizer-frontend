<!-- Gallery Section -->
<section class="gallery-section padding py-5">
  <div class="container">
    <h2 class="display-5 fw-bold mb-4 text-primary" data-aos="fade-up">Gallery</h2>

    <!-- Gallery Filters -->
    <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">
      <button class="btn btn-outline-primary mx-1 active" data-filter="*">All</button>
      <button class="btn btn-outline-primary mx-1" data-filter=".events">Events</button>
      <button class="btn btn-outline-primary mx-1" data-filter=".campus">Campus</button>
      <button class="btn btn-outline-primary mx-1" data-filter=".activities">Activities</button>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-3 gallery-container">
      <!-- Image 1 -->
      <div class="col-md-4 gallery-item events" data-aos="zoom-in" data-aos-delay="100">
        <a href="./assets/images/bg-1.jpg" data-bs-toggle="modal" data-bs-target="#galleryModal">
          <img src="./assets/images/bg-1.jpg" class="img-fluid rounded shadow-sm" alt="Event 1">
        </a>
      </div>

      <!-- Image 2 -->
      <div class="col-md-4 gallery-item campus" data-aos="zoom-in" data-aos-delay="200">
        <a href="./assets/images/bg-2.jpg" data-bs-toggle="modal" data-bs-target="#galleryModal">
            <img src="./assets/images/bg-2.jpg" class="img-fluid rounded shadow-sm" alt="Campus 1">
            </a>
        </div>
        
      <!-- Image 3 -->
      <div class="col-md-4 gallery-item activities" data-aos="zoom-in" data-aos-delay="300">
        <a href="./assets/images/bg-3.jpg" data-bs-toggle="modal" data-bs-target="#galleryModal">
          <img src="./assets/images/bg-3.jpg" class="img-fluid rounded shadow-sm" alt="Activity 1">
        </a>
      </div>

      <!-- Image 4 -->
      <div class="col-md-4 gallery-item events" data-aos="zoom-in" data-aos-delay="400">
        <a href="./assets/images/bg-1.jpg" data-bs-toggle="modal" data-bs-target="#galleryModal">
          <img src="./assets/images/bg-1.jpg" class="img-fluid rounded shadow-sm" alt="Event 2">
        </a>
      </div>

      <!-- Add more images as needed -->
    </div>

    <!-- View All Button -->
    <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="500">
      <a href="gallery.php" class="btn button">View All Gallery</a>
    </div>
  </div>
</section>
<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 bg-transparent">
      <div class="modal-body p-0">
        <img src="./assets/images/bg-1.jpg" class="img-fluid rounded" id="galleryModalImg" alt="Gallery Image">
      </div>
    </div>
  </div>
</div>
