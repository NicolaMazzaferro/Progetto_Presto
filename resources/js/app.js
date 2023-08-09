import './bootstrap';
import 'bootstrap/dist/js/bootstrap';
import './script';
import Swiper from 'swiper';
import {Navigation, Pagination} from "swiper/modules";

var swiper = new Swiper(".mySwiper", {
    modules:[Navigation, Pagination],
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

