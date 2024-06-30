var TrandingSlider = new Swiper('.tranding-slider', {
  effect: 'coverflow',

  slidesPerView: 1,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2.5,
      },
    }
  },
  on: {
    init: function () {
      // додаємо клас до активного слайда після ініціалізації
      this.slides[this.activeIndex].classList.add('active-slide');
    },
    slideChange: function () {
      // видаляємо клас з усіх слайдів
      document.querySelectorAll('.swiper-slide').forEach(function (slide) {
        slide.classList.remove('active-slide');
      });
      // додаємо клас до активного слайда
      this.slides[this.activeIndex].classList.add('active-slide');
    },
  },
});


  document.querySelectorAll('.swiper-slide').forEach(function (slide) {
    slide.addEventListener("click", function (e) {
      if (slide.classList.contains('active-slide')) {
        const change = slide.classList.toggle("change");
        document.body.classList.toggle('dark2');
        if (change) {
          const slides = document.querySelectorAll('.swiper-slide');
          slides.forEach(function (slide) {
            slide.classList.add('test');
          });
          TrandingSlider.disable(); // Вимкнути прокручування слайдів
        } else {
          TrandingSlider.enable(); // Увімкнути прокручування слайдів
          const slides = document.querySelectorAll('.swiper-slide');
          slides.forEach(function (slide) {
            slide.classList.remove('test');
          });
        }

        // Отримання елемента з класом .change після додавання/видалення класу
        const mainChange = document.querySelector(".change");
        console.log(mainChange);
  
      }
    });
  }
  );

  // const video = document.querySelector('.video-slide');

  // // Перевіряємо, чи є клас 'change'
  // if (!video.classList.contains('change')) {
  //   // Якщо класу немає, ставимо відео на паузу
  //   video.pause();
  // }

  document.addEventListener("click", function (event) {
    // Перевіряємо, чи клік був поза межами активного слайда
    const activeSlide = document.querySelector('.swiper-slide.active-slide');
    if (activeSlide && !activeSlide.contains(event.target)) {
      // Видаляємо клас 'change' з усіх слайдів
      document.querySelectorAll('.swiper-slide').forEach(function (slide) {
        slide.classList.remove('change');
      });
      document.body.classList.remove('dark2');

      // Оновлюємо змінну mainChange
      mainChange = null;

      // Включаємо прокручування слайдів
      TrandingSlider.enable();

      // Видаляємо клас 'test' з усіх слайдів
      document.querySelectorAll('.swiper-slide').forEach(function (slide) {
        slide.classList.remove('test');
      });

      console.log(mainChange); // Перевіряємо значення в консолі
    }
  });
