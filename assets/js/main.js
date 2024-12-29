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