// Poner audio a la página al entrar
function playAudio() {
    document.getElementById("bg-music").play();
}

// function stopAudio() {
//     document.getElementById("bg-music").pause();
// }

// Funcionalidad Cuenta regresiva
const day = document.getElementById("days")
const hour = document.getElementById("hours")
const minute = document.getElementById("minutes")
const second = document.getElementById("seconds")

const wedding = '07 Mar 2025'

function countTimer() {
    const weddingDate = new Date(wedding);
    const currentDate = new Date();

    const totalSeconds = (weddingDate - currentDate) / 1000;

    const daysCalc = Math.floor(totalSeconds / 3600 / 24);
    const hoursCalc = Math.floor(totalSeconds / 3600) % 24;
    const minutesCalc = Math.floor(totalSeconds / 60) % 60;
    const secondsCalc = Math.floor(totalSeconds % 60);

    day.innerHTML = daysCalc;
    hour.innerHTML = hoursCalc;
    minute.innerHTML = minutesCalc;
    second.innerHTML = secondsCalc;
}

countTimer();

setInterval(countTimer, 1000);

// Funcionalidad carrusel de fotos
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

// Funcionalidad modal mapa
const modal = document.getElementById("map");
const btnOpen = document.getElementById("open-map");
const btnClose = document.getElementById("close-map");
const body = document.querySelector("body");

btnOpen.addEventListener("click", () => {
    modal.showModal();
    body.classList.add("block-scroll");
});

btnClose.addEventListener("click", () => {
    modal.close();
    body.classList.remove("block-scroll");
});

document.body.addEventListener("keydown", function(event) {
    if (event.code === 'Escape') {
        body.classList.remove("block-scroll");
    }
});