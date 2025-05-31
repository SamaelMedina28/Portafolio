document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".skills-swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    coverflowEffect: {
      rotate: 10,
      stretch: 0,
      depth: 100,
      modifier: 1.5,
      slideShadows: false,
    },
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    speed: 800,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1280: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
    on: {
      init: function () {
        // Add hover effect for better UX
        const slides = document.querySelectorAll(".swiper-slide");
        slides.forEach((slide) => {
          slide.addEventListener("mouseenter", () => {
            swiper.autoplay.stop();
          });
          slide.addEventListener("mouseleave", () => {
            swiper.autoplay.start();
          });
        });
      },
    },
  });
});
