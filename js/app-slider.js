var currentSlide = 1;

function scrollToSlide(slideIndex) {
  // Get the slider element
  var slider = document.querySelector(".container-slider .slider");

  // Calculate the scroll position based on the slide index
  var scrollPosition = slideIndex * slider.clientWidth;

  // Scroll to the calculated position
  slider.scrollTo({
    left: scrollPosition,
    behavior: "smooth",
  });

  // Update the current slide index
  currentSlide = slideIndex;
}

// Example: Automatically scroll to the next slide every 3 seconds
function autoScroll() {
  currentSlide = (currentSlide + 1) % 2; // Adjust the number based on the number of slides
  scrollToSlide(currentSlide);
}

setInterval(autoScroll, 5000);
