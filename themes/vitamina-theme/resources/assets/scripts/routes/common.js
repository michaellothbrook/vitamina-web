import SwiperService from '../services/SwiperService';

export default {
  init() {
    const sliderHistory = new SwiperService('.slider-history', {
      slidesPerView: 3,
      spaceBetween: 40,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      grabCursor: true,
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        740: {
          slidesPerView: 3,
        },
      },
    });
    sliderHistory.init();

    const sliderWhy = new SwiperService('.slider-why', {
      slidesPerView: 1,
      effect: 'fade',
      autoplay: {
        delay: 2000,
        disableOnInteraction: true,
      },
      grabCursor: true,
    });
    sliderWhy.init();

    const sectionWhy = document.querySelectorAll('.section-why');
    sectionWhy.forEach((section) => {
      section.addEventListener('click', function () {
        sliderWhy.swiper.slideNext();
      });
    });

    const sliderNews = new SwiperService('.slider-latest-news', {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-news-pagination',
        clickable: true,
      },
      grabCursor: true,
      breakpoints: {
        640: {
          centeredSlides: false,
          slidesPerView: 1,
          touchRatio: 3,
        },
        740: {
          slidesPerView: 3,
        },
      },
    });
    sliderNews.init();

    const bullets = document.querySelectorAll('.swiper-pagination-bullet');
    bullets.forEach((bullet, index) => {
      bullet.addEventListener('click', () => {
        sliderNews.slideTo(index); // Navegar para o slide correspondente ao índice
      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
