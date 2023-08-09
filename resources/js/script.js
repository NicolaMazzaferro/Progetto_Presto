import Swiper from 'swiper';
import {Navigation, Pagination} from "swiper/modules";

let swiper = new Swiper(".mySwiper", {
    modules:[Navigation, Pagination],
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

window.addEventListener("scroll", function() {
    // Seleziona la navbar e i link
    let navbar = document.getElementById("navbar");
    let links = document.querySelectorAll(".nav-link");

    // Controllo la posizione di scorrimento
    if (window.scrollY > 0) { // Cambia "50" a qualunque valore desideri
        // Se l'utente ha scorso oltre 50px, cambia lo stile
        navbar.style.backgroundColor = "rgba(0,0,0,0.5)";

        for (let link of links) {
            link.style.color = "white";
        }
    } else {
        // Altrimenti, torna allo stile originale
        navbar.style.backgroundColor = "transparent";

        for (let link of links) {
            link.style.color = "black";
        }
    }
});