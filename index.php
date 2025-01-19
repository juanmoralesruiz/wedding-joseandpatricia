<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="assets/js/main.js" defer></script>
    <title>Nuestra boda - José y Patricia</title>
</head>

<body>
    <!-- Portada de la invitación -->
    <section class="front-page">
        <h1>Nuestra Boda</h1>
        <div class="front-page__title">
            <h2>José</h2>
            <h2>y</h2>
            <h2>Patricia</h2>
        </div>
    </section>

    <!-- Sección para el reproductor de música y el versículo -->
    <section class="music-verse">
        <p class="music__text">HAZ CLIC PARA ESCUCHAR NUESTRA CANCIÓN</p>
        <img loading="lazy" class="sunflower-separator" src="assets/img/icons/music-sep.webp" alt="Reproductor de música" onclick="playAudio()">
        <div class="verse__text">
            <p>"EL AMOR ES PACIENTE, ES BONDADOSO. EL AMOR NO ES ENVIDIOSO NI JACTANCIOSO, NI ORGULLOSO"</p>
        </div>
        <p class="verse__title">1 CORINTIOS 13:4</p>
    </section>

    <!-- Sección de personas importantes -->
    <section class="people">
        <div class="line_h"></div>
        <div class="people__title">
            <p>CON LA BENDICIÓN DE DIOS Y NUESTROS PADRES</p>
        </div>
        <div class="people__name">
            <div class="name__section">
                <div class="name__title">
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                    <p>PADRES DEL NOVIO</p>
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                </div>
                <p class="name__text">Alex Valiente Rosales</p>
                <p class="name__text">Mary Rosana Ruiz Perez</p>
            </div>
            <div class="name__section">
                <div class="name__title">
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                    <p>PADRES DE LA NOVIA</p>
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                </div>
                <p class="name__text">Victor Raul Romero</p>
                <p class="name__text">Cierto Esther Campos Lopez</p>
            </div>
        </div>
        <div class="people__name">
            <div class="name__section">
                <div class="name__title">
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                    <p>PADRINOS</p>
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                </div>
                <p class="name__text">Angel Rodriguez Amaya</p>
                <p class="name__text">Lud Rojas Villanueva</p>
            </div>
            <div class="name__section">
                <div class="name__title">
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                    <p>TESTIGOS</p>
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                </div>
                <p class="name__text">Darcing Diaz Miranda</p>
                <p class="name__text">Patricia Sevilla Nieves</p>
            </div>
        </div>
        <div class="line_h"></div>
    </section>

    <!-- Sección invitación y cuenta regresiva -->
    <section class="countdown">
        <div class="cd__invitation">
            <p class="invitation__us">NOSOTROS</p>
            <h3>José</h3>
            <h3>y</h3>
            <h3>Patricia</h3>
            <div class="invitation__group--text1">
                <p class="normal-text">TENEMOS EL HONOR DE INVITARLOS A CELEBRAR</p>
            </div>
            <div class="name__title name__title--invitation">
                <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                <p>NUESTRA BODA</p>
                <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            </div>
            <div class="invitation__group--text2">
                <p class="normal-text">QUEREMOS QUE SEAN PARTE Y NOS ACOMPAÑEN A VIVIR ESTE MOMENTO</p>
            </div>
        </div>
        <div class="cd__countdown">
            <p class="countdown__text">VIERNES</p>
            <div class="countdown__date">
                <p>07</p>
                <div class="line_v"></div>
                <p>03</p>
                <div class="line_v"></div>
                <p>2025</p>
            </div>
            <p class="countdown__text">2:00 PM</p>
            <div class="countdown__time">
                <div class="time__charGroup">
                    <p class="time__char" id="days"></p>
                    <p class="time__text">DÍAS</p>
                </div>
                <div class="line_v"></div>
                <div class="time__charGroup">
                    <p class="time__char" id="hours"></p>
                    <p class="time__text">HORAS</p>
                </div>
                <div class="line_v"></div>
                <div class="time__charGroup">
                    <p class="time__char" id="minutes"></p>
                    <p class="time__text">MINUTOS</p>
                </div>
                <div class="line_v"></div>
                <div class="time__charGroup">
                    <p class="time__char" id="seconds"></p>
                    <p class="time__text">SEGUNDOS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección invitación y cuenta regresiva -->
    <section class="dress-code">
        <img loading="lazy" src="assets/img/icons/dress-code.webp" alt="Ícono del código de vestimenta" class="icon">
        <p>CÓDIGO DE VESTIMENTA</p>
        <p class="bold">ELEGANTE</p>
        <div class="dress-code__white">
            <p>"EL BLANCO ES UN COLOR HERMOSO, PERO EN NUESTRA BODA, <span class="bold">ES EXCLUSIVO PARA LA NOVIA</span>. ¡TODOS LOS DEMÁS COLORES ESTÁN DISPONIBLES!"</p>
        </div>
        <img loading="lazy" src="assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
    </section>

    <!-- Sección de galería de fotos -->
    <section class="gallery">
        <p class="section__title">Galería</p>
        <div class="slideshow-container">
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-01.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-02.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-03.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-04.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-05.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-06.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-07.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-08.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-09.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-10.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-11.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img loading="lazy" src="assets/img/photos/p-12.webp" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="dots" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
        </div>
    </section>

    <!-- Sección de ubicación -->
    <section class="ubication">
        <img loading="lazy" src="assets/img/icons/cup.webp" alt="Ícono del código de vestimenta" class="icon">
        <p class="section__title">Recepción</p>
        <div class="ubication__section">
            <p class="ubication__name">Nuestra Villa</p>
            <button class="main-btn name__title" id="open-map">
                <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                <p>UBICACIÓN</p>
                <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            </button>
        </div>
    </section>

    <dialog class="map" id="map">
        <div class="map__section">
            <button id="close-map"><span class="material-symbols-outlined">Cancel</span></button>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.985905327665!2d-79.06586392587403!3d-8.10291658105296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d941f496e3d%3A0x240e3e9c0083c19e!2sNuestra%20Villa!5e0!3m2!1sen!2spe!4v1735541136381!5m2!1sen!2spe" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </dialog>

    <!-- Sección del itinerario -->
    <section class="itinerary">
        <img loading="lazy" src="assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Itinerario</p>
        <div class="itinerary__group">
            <div class="group__section">
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/civil.webp" alt="Ícono ceremonia civil">
                    <div class="activity__text">
                        <p>CEREMONIA CIVIL</p>
                        <p>3:30 PM</p>
                    </div>
                </div>
                <div class="group__line line_v"></div>
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/church.webp" alt="Ícono ceremonia religiosa">
                    <div class="activity__text">
                        <p>CEREMONIA RELIGIOSA</p>
                        <p>4:00 PM</p>
                    </div>
                </div>
                <div class="group__line line_v"></div>
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/reception.webp" alt="Ícono recepción">
                    <div class="activity__text">
                        <p>RECEPCIÓN</p>
                        <p>6:00 PM</p>
                    </div>
                </div>
                <div class="group__line line_v"></div>
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/toast.webp" alt="Ícono brindis">
                    <div class="activity__text">
                        <p>BRINDIS</p>
                        <p>7:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="group__section">
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/vals.webp" alt="Ícono tiempo de vals">
                    <div class="activity__text">
                        <p>VALS</p>
                        <p>7:30 PM</p>
                    </div>
                </div>
                <div class="group__line line_v"></div>
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/dinner.webp" alt="Ícono tiempo de cena">
                    <div class="activity__text">
                        <p>CENA</p>
                        <p>8:00 PM</p>
                    </div>
                </div>
                <div class="group__line line_v"></div>
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/show.webp" alt="Ícono tiempo del show">
                    <div class="activity__text">
                        <p>SHOW</p>
                        <p>8:30 PM</p>
                    </div>
                </div>
                <div class="group__line line_v"></div>
                <div class="group__activity">
                    <img loading="lazy" src="assets/img/icons/bouquet.webp" alt="Ícono tiro del bouquet">
                    <div class="activity__text">
                        <p>TIRA DE RAMO</p>
                        <p>9:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de lista de regalos -->
    <section class="gift">
        <img loading="lazy" src="assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Regalos</p>
        <div class="gift__text">
            <p class="little-text">"EL MEJOR REGALO PARA NOSOTROS ES CONTAR CON TU PRESENCIA EN ESTE DÍA TAN IMPORTANTE, PERO SI QUIERES TENER UN DETALLE CON NOSOTROS AYÚDANOS A CONTRIBUIR CON NUESTRA CASITA SOÑADA"</p>
        </div>
        <button class="main-btn name__title" id="open-gift">
            <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            <p>LISTA DE REGALOS</p>
            <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
        </button>
    </section>

    <dialog class="gift" id="gift">
        <div class="gift__section">
            <button id="close-gift"><span class="material-symbols-outlined">Cancel</span></button>
            <div class="gift__list">
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/yape.webp" alt="Imagen yape"></div>
                    <button class="item__name normal-text" id="open-transfer">Depósito o transferencia</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/cafetera.webp" alt="Imagen cafetera"></div>
                    <button class="item__name normal-text">Cafetera</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/cocina.webp" alt="Imagen cocina"></div>
                    <button class="item__name normal-text">Cocina</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/refrigeradora.webp" alt="Imagen refrigeradora"></div>
                    <button class="item__name normal-text">Refrigeradora</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/lavadora.webp" alt="Imagen lavadora"></div>
                    <button class="item__name normal-text">Lavadora</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/sandwichera.webp" alt="Imagen sandwichera"></div>
                    <button class="item__name normal-text">Sandwichera</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/televisor.webp" alt="Imagen televisor"></div>
                    <button class="item__name normal-text">Televisor</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/vajilla.webp" alt="Imagen juego de vajilla"></div>
                    <button class="item__name normal-text">Juego de vajilla</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/microondas.webp" alt="Imagen microondas"></div>
                    <button class="item__name normal-text">Microondas</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/edredones.webp" alt="Imagen edredones"></div>
                    <button class="item__name normal-text">Juego de edredones</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/comedor.webp" alt="Imagen comedor"></div>
                    <button class="item__name normal-text">Juego de comedor</button>
                </div>
                <div class="list__item">
                    <div class="item__object"><img loading="lazy" src="assets/img/images/sala.webp" alt="Imagen juego de sala"></div>
                    <button class="item__name normal-text">Juego de sala</button>
                </div>
            </div>
        </div>
    </dialog>

    <dialog class="transfer" id="transfer">
        <div class="transfer__section">
            <button id="close-transfer"><span class="material-symbols-outlined">arrow_back</span></button>
            <img src="assets/img/images/Untitled design.jpg" alt="Imagen QR yape">
            <div class="transfer__number">
                <p class="transfer__number--title">BCP - </p>
                <p id="bcp">57097437911085</p>
                <span class="material-symbols-outlined" onclick="copiarBcp()">content_copy</span>
            </div>
            <div class="transfer__number number__bbva">
                <p class="transfer__number--title">BBVA - </p>
                <p id="bbva">0011-0579-0219365453</p>
                <span class="material-symbols-outlined" onclick="copiarBbva()">content_copy</span>
            </div>
            <div class="transfer__number">
                <p class="transfer__number--title">INTERBANK - </p>
                <p id="interbank">8983430843291</p>
                <span class="material-symbols-outlined" onclick="copiarInterbank()">content_copy</span>
            </div>
            <button class="main-btn" id="close-transfer_two">CONFIRMAR</button>
        </div>
    </dialog>

    <!-- Sección de número de pases y confirmación -->
    <section class="passes">
        <img loading="lazy" src="assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Pases</p>
        <div class="passes__message">
            <p class="little-text">"TU PRESENCIA EN NUESTRA BODA SIGNIFICA MUCHO PARA NOSOTROS. POR FAVOR, AYÚDANOS A MANTENER TODO ORGANIZADO Y ORDENADO RESPETANDO EL NÚMERO DE PASES INDICADOS EN ESTA INVITACIÓN. MUCHAS GRACIAS."</p>
        </div>
        <button class="main-btn name__title" id="open-passes">
            <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            <p>CONFIRMA TU ASISTENCIA</p>
            <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
        </button>
    </section>

    <dialog class="passes" id="passes">
        <div class="passes__section">
            <button id="close-passes"><span class="material-symbols-outlined">Cancel</span></button>
            <p class="passes__title">Ingresa tu código personal</p>
            <form action="" method="get">
                <input type="text" name="" id="">
                <div class="line_h"></div>
                <button class="main-btn name__title passes-btn" id="open-passes">
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                    <p>CONFIRMA TU ASISTENCIA</p>
                    <img loading="lazy" class="sunflower-icon" src="assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                </button>
            </form>
        </div>
    </dialog>

    <!-- Sección de mensaje sobre los niños -->
    <section class="kids">
        <div class="kids__text">
            <div class="kids__text--section">
                <p>"ADORAMOS A TUS PEQUEÑOS, SIN EMBARGO, ESTE EVENTO ESTÁ DESTINADO SOLO PARA ADULTOS. ¡ESPERAMOS TU COMPRENSIÓN!"</p>
            </div>
        </div>
    </section>

    <!-- Footer y contactos -->
    <footer>
        <div class="footer__icons">
            <a href="https://wa.link/37cpyg" target="_blank"><span class="ic--baseline-whatsapp"></span></a>
            <a href="https://www.instagram.com/" target="_blank"><span class="mdi--instagram"></span></a>
        </div>
        <p>© 2025 Todos los derechos reservados</p>
    </footer>
    
    <!-- Integrar audio a la página -->
    <audio src="assets/audio/photograph-ed sheeran.mp3" id="bg-music" loop></audio>
</body>
</html>