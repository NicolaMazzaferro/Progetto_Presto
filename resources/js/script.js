import Swiper from 'swiper';
import {Navigation, Pagination} from "swiper/modules";

let swiper = new Swiper(".mySwiper", {
    modules:[Navigation, Pagination],
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// e passato Stefano

let lastScrollTop = 0;
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function() {
    let scrollTop = window.scrollY;

    if (scrollTop > lastScrollTop) { 
        navbar.classList.add("scrolling-up");
        // navbar.classList.add("scrolling-down");
    } else if (scrollTop <= 20) {  // Se sei vicino all'inizio della pagina
        // navbar.classList.remove("scrolling-down");
        navbar.classList.remove("scrolling-up");
    } else {
        navbar.classList.remove("scrolling-down");
        navbar.classList.add("scrolling-up");
    }

    lastScrollTop = scrollTop;
});

// animazione home
AOS.init();



