<?php

include("../../../database/db.php");
session_start();

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtMensaje = (isset($_POST['txtMensaje'])) ? $_POST['txtMensaje'] : "";
$txtCode = (isset($_POST['txtCode'])) ? $_POST['txtCode'] : "";
$action = (isset($_POST['action'])) ? $_POST['action'] : "";

$sentenciaSQL = $conexion->prepare("SELECT * FROM informacion");
$sentenciaSQL->execute();
$datosInvitados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

switch ($action) {
    case 'enviar-mensaje':
        foreach ($datosInvitados as $invitados) {
            if (!empty($invitados['code_extra'])) {
                $sentenciaSQL = $conexion->prepare("UPDATE informacion SET mensaje=:mensaje, code_extra='' WHERE codigo=:code");
                $sentenciaSQL->bindParam('mensaje', $txtMensaje);
                $sentenciaSQL->bindParam('code', $invitados['codigo']);
                $sentenciaSQL->execute();
                header("Location: ../../../#ph");
            }
        }
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/style-2.css">
    <link rel="shortcut icon" href="../../../assets/img/icons/ico_jp.ico" type="image/x-icon">
    <title>¡Nos casamos! J&P</title>
</head>

<body>

    <!-- Sección de número de pases y confirmación -->
    <section class="passes">
        <img loading="lazy" src="../../../assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Pases</p>
        <div class="passes__message">
            <p class="little-text">"TU PRESENCIA EN NUESTRA BODA SIGNIFICA MUCHO PARA NOSOTROS. POR FAVOR, AYÚDANOS A MANTENER TODO ORGANIZADO Y ORDENADO RESPETANDO EL NÚMERO DE PASES INDICADOS EN ESTA INVITACIÓN. MUCHAS GRACIAS."</p>
        </div>
        <button class="main-btn name__title" id="open-passes">
            <img loading="lazy" class="sunflower-icon" src="../../../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            <p>CONFIRMA TU ASISTENCIA</p>
            <img loading="lazy" class="sunflower-icon" src="../../../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
        </button>
    </section>

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

    <div class="modal-passes">
        <div class="modal-passes-body modal-mssg">
            <form method="POST" enctype="multipart/form-data">
                <p class="passes__title">Déjanos un mensaje con buenos deseos</p>
                <textarea name="txtMensaje" placeholder="Escribe tu mensaje" autofocus></textarea>
                <button type="submit" name="action" class="main-btn name__title passes-btn" value="enviar-mensaje">Enviar</button>
            </form>
        </div>
    </div>


</body>
</html>