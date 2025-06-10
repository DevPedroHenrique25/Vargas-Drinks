        const swiper = new Swiper(".mySwiper", {
          loop: true,
          slidesPerView: 3,
          spaceBetween: 20,
          pagination: {
          el: '.swiper-pagination',
          clickable: true,
          type: 'bullets',
        },
        autoplay: {
        delay: 3000,     // Tempo entre os slides (em ms)
        disableOnInteraction: false,
        pauseOnMouseEnter: true // Continua mesmo após o usuário interagir
        },
        breakpoints: {
        // Quando a tela for >= 1024px
        1026: {
          slidesPerView: 3,
        },
        // Quando for >= 768px
        768: {
          slidesPerView: 2,
        },
        // Quando for < 768px
        0: {
          slidesPerView: 1,
        }
      }
    });

