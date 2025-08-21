<section class="gallery-section padding py-5">
  <div class="container">
    <h2 class="display-5 fw-bold mb-4 text-primary" data-aos="fade-up">Gallery</h2>

    <!-- Filter Buttons -->
    <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">
      <button class="btn btn-outline-primary mx-1 active" data-filter="all">All</button>
      <button class="btn btn-outline-primary mx-1" data-filter="events">Events</button>
      <button class="btn btn-outline-primary mx-1" data-filter="campus">Campus</button>
      <button class="btn btn-outline-primary mx-1" data-filter="activities">Activities</button>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-3" id="galleryGrid">
      <div class="col-md-6 col-lg-4 gallery-item events" data-aos="zoom-in">
        <a href="./assets/images/bg-1.jpg" class="glightbox" data-gallery="school-gallery">
          <img src="./assets/images/bg-1.jpg" class="img-fluid rounded shadow-sm" alt="Event 1">
        </a>
      </div>
      <div class="col-md-6 col-lg-4 gallery-item campus" data-aos="zoom-in" data-aos-delay="100">
        <a href="./assets/images/bg-2.jpg" class="glightbox" data-gallery="school-gallery">
          <img src="./assets/images/bg-2.jpg" class="img-fluid rounded shadow-sm" alt="Campus 1">
        </a>
      </div>
      <div class="col-md-6 col-lg-4 gallery-item activities" data-aos="zoom-in" data-aos-delay="200">
        <a href="./assets/images/bg-3.jpg" class="glightbox" data-gallery="school-gallery">
          <img src="./assets/images/bg-3.jpg" class="img-fluid rounded shadow-sm" alt="Activity 1">
        </a>
      </div>
      <!-- Add more items -->
    </div>

    <!-- View All Button -->
    <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
      <a href="gallery.php" class="btn button btn-primary">View All Gallery</a>
    </div>
  </div>
</section>
