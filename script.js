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

// Mover la variable fuera de la función para que mantenga su estado
let proyectosMostrados = false;

document.getElementById("verMasBtn").addEventListener("click", function () {
  const btn = this;

  if (!proyectosMostrados) {
    // Mostrar más proyectos
    document.querySelectorAll(".project-item.hidden").forEach((item) => {
      item.classList.remove("hidden");
    });
    btn.textContent = "Ver menos proyectos";
    btn.classList.remove("bg-blue-600");
    btn.classList.add("bg-red-600");
  } else {
    // Ocultar proyectos adicionales
    // Primero, necesitamos una forma de identificar qué proyectos están ocultos
    // Vamos a asumir que los proyectos adicionales tienen la clase 'hidden' por defecto
    // y que los primeros 6 (por ejemplo) son los que se muestran inicialmente
    const todosLosProyectos = document.querySelectorAll(".project-item");
    todosLosProyectos.forEach((item, index) => {
      if (index >= 6) {
        // Ajusta este número según cuántos proyectos quieras mostrar inicialmente
        item.classList.add("hidden");
      }
    });
    btn.textContent = "Ver más proyectos";
    btn.classList.remove("bg-red-600");
    btn.classList.add("bg-blue-600");
  }

  // Invertir el estado
  proyectosMostrados = !proyectosMostrados;
});
