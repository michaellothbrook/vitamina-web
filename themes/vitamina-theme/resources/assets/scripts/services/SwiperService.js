import Swiper from 'swiper/swiper-bundle';
import 'swiper/swiper-bundle.min.css';

class SwiperService {
  constructor(selector, options = {}) {
    this.selector = selector;
    this.options = {...options};
    this.swiper = null;
  }

  init() {
    this.swiper = new Swiper(this.selector, this.options);
  }

  destroy() {
    if (this.swiper) {
      this.swiper.destroy();
      this.swiper = null;
    }
  }
}

export default SwiperService;
