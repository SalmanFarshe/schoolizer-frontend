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