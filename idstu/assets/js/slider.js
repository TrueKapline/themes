document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.seminars_slider_wrapper');
  const items = document.querySelectorAll('.seminars_item');
  const itemWidth = items[0].offsetWidth + parseFloat(getComputedStyle(items[0]).marginRight);;
  const prevBtn = document.querySelector('.seminars-slider__btn_prev');
  const nextBtn = document.querySelector('.seminars-slider__btn_next');
  let currentIndex = 0;

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    
    prevBtn.disabled = currentIndex === 0;

    if (window.screen.width > 1024) {
      nextBtn.disabled = currentIndex === items.length - 3;
    } else if (window.screen.width <= 1024 && window.screen.width > 768) {
      nextBtn.disabled = currentIndex === items.length - 2;
    } else {
      nextBtn.disabled = currentIndex === items.length - 1;
    }
  }

  prevBtn.addEventListener('click', function() {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  });

  nextBtn.addEventListener('click', function() {
    if (window.screen.width > 1024) {
      if (currentIndex < items.length - 3) { // -3 потому что отображается 3 семинара одновременно
        currentIndex++;
        updateSlider();
      }
    } else if (window.screen.width <= 1024 && window.screen.width > 768) {
      if ( currentIndex < items.length - 2) { // 2 семинара одновременно
        currentIndex++;
        updateSlider();
      }
    } else {
      if ( currentIndex < items.length - 1) { // 1 семинар
        currentIndex++;
        updateSlider();
      }
    }
  });

  updateSlider();
});

document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.publications_slider_wrapper');
  const items = document.querySelectorAll('.publications_item');
  const itemWidth = items[0].offsetWidth + parseFloat(getComputedStyle(items[0]).marginRight);;
  const prevBtn = document.querySelector('.publications-slider__btn_prev');
  const nextBtn = document.querySelector('.publications-slider__btn_next');
  let currentIndex = 0;

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;

    prevBtn.disabled = currentIndex === 0;
    
    if (window.screen.width > 768) {
      nextBtn.disabled = currentIndex === items.length - 2;
    } else {
      nextBtn.disabled = currentIndex === items.length - 1;
    }
  }

  prevBtn.addEventListener('click', function() {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  });

  nextBtn.addEventListener('click', function() {
    if ( window.screen.width > 768 ) {
      if ( currentIndex < items.length - 2) {
        currentIndex++;
        updateSlider();
      }
    } else {
      if ( currentIndex < items.length - 1) {
        currentIndex++;
        updateSlider();
      }
    }
  });

  updateSlider();
});