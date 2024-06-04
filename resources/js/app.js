import './bootstrap';

import Swiper from "swiper";
import { Autoplay, EffectFade, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";



new Swiper(".hero-carousel", {
    loop: true,
    effect:'fade',
    // grabCursor: true,
    slidesPerView: 1,
  
    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    modules: [Autoplay,EffectFade],
});