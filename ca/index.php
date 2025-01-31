<?php

include("../database/db.php");
session_start();

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtCode = (isset($_POST['txtCode'])) ? $_POST['txtCode'] : "";
$action = (isset($_POST['action'])) ? $_POST['action'] : "";

switch ($action) {
    case 'dato-validar':
        $txtCode = strtoupper($txtCode);

        $sentenciaSQL = $conexion->prepare("SELECT * FROM informacion WHERE codigo=:code");
        $sentenciaSQL->bindParam(':code', $txtCode);
        $sentenciaSQL->execute();
        $datosExtra = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $alw_code = $datosExtra['codigo'];

        if (empty($txtCode) || $txtCode != $alw_code) {
            header("Location: ../ca");
        } else {
            $sentenciaSQL = $conexion->prepare("UPDATE informacion SET code_extra=:code WHERE codigo=:code");
            $sentenciaSQL->bindParam(':code', $txtCode);
            $sentenciaSQL->execute();
            header("Location:pass");
        }
        break;
    case 'Return':
        header("Location:../#ph");
        break;
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM informacion");
$sentenciaSQL->execute();
$datosInvitados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-2.css">
    <link rel="shortcut icon" href="../assets/img/icons/ico_jp.ico" type="image/x-icon">
    <title>¡Nos casamos! J&P</title>
</head>

<body>

    <!-- Sección de número de pases y confirmación -->
    <section class="passes">
        <img loading="lazy" src="../assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Pases</p>
        <div class="passes__message">
            <p class="little-text">"TU PRESENCIA EN NUESTRA BODA SIGNIFICA MUCHO PARA NOSOTROS. POR FAVOR, AYÚDANOS A MANTENER TODO ORGANIZADO Y ORDENADO RESPETANDO EL NÚMERO DE PASES INDICADOS EN ESTA INVITACIÓN. MUCHAS GRACIAS."</p>
        </div>
        <button class="main-btn name__title" id="open-passes">
            <img loading="lazy" class="sunflower-icon" src="../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            <p>CONFIRMA TU ASISTENCIA</p>
            <img loading="lazy" class="sunflower-icon" src="../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
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
        <div class="modal-passes-body">
            <form method="POST" enctype="multipart/form-data">
                <button type="submit" name="action" id="close-gift" value="Return"><span class="material-symbols-outlined">Cancel</span></button>
                <p class="passes__title">Ingresa tu código personal</p>
                <input type="text" name="txtCode" placeholder="Ingresa tu código" autofocus>
                <button type="submit" name="action" class="main-btn name__title passes-btn" value="dato-validar">Validar</button>
            </form>
        </div>
    </div>


</body>
</html>