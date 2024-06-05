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



const header = document.querySelector("#header");
const navList = document.querySelector("#navList");
const logoWhite = document.querySelector('#logo--white')
const logoDark = document.querySelector('#logo--dark')
const languageSwitcher = document.querySelector('#languageSwitcher ')

let isNavbarShown = false;

const navbarOnScroll = () => {
    let scrollPosition = window.scrollY;

    if (scrollPosition >= 10) {
        header.classList.add("bg-white");
        navList.classList.add('text-black')
        logoWhite.classList.add('hidden')
        logoDark.classList.remove('hidden')
        languageSwitcher.classList.add('text-black')
        
    } else {
        header.classList.remove("bg-white");
        navList.classList.remove('text-black')
        logoWhite.classList.remove('hidden')
        logoDark.classList.add('hidden')
        languageSwitcher.classList.remove('text-black')
        
    }
};

window.addEventListener("scroll", navbarOnScroll);