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

function plusSlides(n) {
    showSlides(slideIndex += n);
}

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
const modal_map = document.getElementById("map");
const btnOpenMap = document.getElementById("open-map");
const btnCloseMap = document.getElementById("close-map");
const body = document.querySelector("body");

btnOpenMap.addEventListener("click", () => {
    modal_map.showModal();
    body.classList.add("block-scroll");
});

btnCloseMap.addEventListener("click", () => {
    modal_map.close();
    body.classList.remove("block-scroll");
});

document.body.addEventListener("keydown", function(event) {
    if (event.code === 'Escape') {
        body.classList.remove("block-scroll");
    }
});


// Funcionalidad modal regalos
const modal_gift = document.getElementById("gift");
const btnOpenGift = document.getElementById("open-gift");
const btnCloseGift = document.getElementById("close-gift");

btnOpenGift.addEventListener("click", () => {
    modal_gift.showModal();
    body.classList.add("block-scroll");
});

btnCloseGift.addEventListener("click", () => {
    modal_gift.close();
    body.classList.remove("block-scroll");
});


// Funcionalidad modal transferencia
const modal_transfer = document.getElementById("transfer");
const btnOpenTransfer = document.getElementById("open-transfer");
const btnCloseTransfer = document.getElementById("close-transfer");
const btnCloseTransfer2 = document.getElementById("close-transfer_two");

btnOpenTransfer.addEventListener("click", () => {
    modal_transfer.showModal();
    modal_gift.close();
    body.classList.add("block-scroll");
});

btnCloseTransfer.addEventListener("click", () => {
    modal_gift.showModal();
    modal_transfer.close();
    body.classList.remove("block-scroll");
});

btnCloseTransfer2.addEventListener("click", () => {
    modal_transfer.close();
    body.classList.remove("block-scroll");
});


// Funcionalidad para copiar los textos
const bcp = document.getElementById("bcp").innerHTML;
const bbva = document.getElementById("bbva").innerHTML;
const interbank = document.getElementById("interbank").innerHTML;

const copiarBcp = async () => {await navigator.clipboard.writeText(bcp);}
const copiarBbva = async () => {await navigator.clipboard.writeText(bbva);}
const copiarInterbank = async () => {await navigator.clipboard.writeText(interbank);}