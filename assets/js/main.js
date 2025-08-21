$(document).ready(function () {
  let slides = $(".home-hero .slide");
  let current = 0;

  function showSlide(index) {
    slides.removeClass("active");
    slides.eq(index).addClass("active");
  }

  $(".next").click(function () {
    current = (current + 1) % slides.length;
    showSlide(current);
  });

  $(".prev").click(function () {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  });

  // Auto slide
  setInterval(function () {
    $(".next").click();
  }, 5000);
});

// Initialize Lightbox
  const lightbox = GLightbox({
    selector: '.glightbox',
    openEffect: 'fade',
    closeEffect: 'fade'
  });

  // Simple Filter
  const filterButtons = document.querySelectorAll('.gallery-section button[data-filter]');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.getAttribute('data-filter');
      galleryItems.forEach(item => {
        if (filter === 'all' || item.classList.contains(filter)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });