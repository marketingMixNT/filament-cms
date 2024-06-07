import "./bootstrap";

import Swiper from "swiper";
import { Autoplay, EffectFade, Navigation, Pagination } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".hero-carousel", {
    loop: true,
    effect: "fade",
    // grabCursor: true,
    slidesPerView: 1,
    

    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    modules: [Autoplay, EffectFade],
});

new Swiper(".offer-carousel", {
    loop: true,
    effect: "fade",
    // grabCursor: true,
    slidesPerView: 3,
    

    spaceBetween: 50,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
        
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination", 
        clickable: true, 
    },
    modules: [Autoplay, Navigation, Pagination],
});

const header = document.querySelector("#header");
const navList = document.querySelector("#navList");
const logoWhite = document.querySelector("#logo--white");
const logoDark = document.querySelector("#logo--dark");
const languageSwitcher = document.querySelector("#languageSwitcher ");

let isNavbarShown = false;

const navbarOnScroll = () => {
    let scrollPosition = window.scrollY;

    if (scrollPosition >= 10) {
        header.classList.add("bg-white");
        navList.classList.add("text-black");
        navList.classList.remove("text-white");
        logoWhite.classList.add("hidden");
        logoDark.classList.remove("hidden");
        languageSwitcher.classList.add("text-black");
        languageSwitcher.classList.remove("text-white");
    } else {
        header.classList.remove("bg-white");
        navList.classList.remove("text-black");
        navList.classList.add("text-white");
        logoWhite.classList.remove("hidden");
        logoDark.classList.add("hidden");
        languageSwitcher.classList.remove("text-black");
        languageSwitcher.classList.add("text-white");
    }
};

window.addEventListener("scroll", navbarOnScroll);
