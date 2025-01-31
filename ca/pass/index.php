<?php

include("../../database/db.php");
session_start();

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtCode = (isset($_POST['txtCode'])) ? $_POST['txtCode'] : "";
$action = (isset($_POST['action'])) ? $_POST['action'] : "";

$sentenciaSQL = $conexion->prepare("SELECT * FROM informacion");
$sentenciaSQL->execute();
$datosInvitados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

switch ($action) {
    case 'si-asistencia':
        foreach ($datosInvitados as $invitados) {
            if (!empty($invitados['code_extra'])) {
                $sentenciaSQL = $conexion->prepare("UPDATE informacion SET asistencia='Confirma' WHERE codigo=:code");
                $sentenciaSQL->bindParam('code', $invitados['codigo']);
                $sentenciaSQL->execute();
                header("Location: mssg");
            }
        }
        break;
    case 'no-asistencia':
        foreach ($datosInvitados as $invitados) {
            if (!empty($invitados['code_extra'])) {
                $sentenciaSQL = $conexion->prepare("UPDATE informacion SET asistencia='No irá' WHERE codigo=:code");
                $sentenciaSQL->bindParam('code', $invitados['codigo']);
                $sentenciaSQL->execute();
                header("Location: mssg");
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style-2.css">
    <link rel="shortcut icon" href="../../assets/img/icons/ico_jp.ico" type="image/x-icon">
    <title>¡Nos casamos! J&P</title>
</head>

<body>

    <!-- Sección de número de pases y confirmación -->
    <section class="passes">
        <img loading="lazy" src="../../assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Pases</p>
        <div class="passes__message">
            <p class="little-text">"TU PRESENCIA EN NUESTRA BODA SIGNIFICA MUCHO PARA NOSOTROS. POR FAVOR, AYÚDANOS A MANTENER TODO ORGANIZADO Y ORDENADO RESPETANDO EL NÚMERO DE PASES INDICADOS EN ESTA INVITACIÓN. MUCHAS GRACIAS."</p>
        </div>
        <button class="main-btn name__title" id="open-passes">
            <img loading="lazy" class="sunflower-icon" src="../../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            <p>CONFIRMA TU ASISTENCIA</p>
            <img loading="lazy" class="sunflower-icon" src="../../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
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
                <?php foreach ($datosInvitados as $invitados) { ?>
                    <?php if ($invitados['code_extra'] != '') { ?>
                        <p class="texto__validado">Hola <b><?php echo $invitados['nombre'].' '.$invitados['apellido'] ?></b>,</p>
                        <p class="texto__validado">hemos separado para ti <b><?php echo $invitados['num_pases'] ?></b> pases.</p>
                    <?php } ?>
                <?php } ?>
                <div class="btnGroup-regalo">
                    <button type="submit" name="action" class="main-btn name__title passes-btn" value="si-asistencia">Confirmo!</button>
                    <button type="submit" name="action" class="main-btn name__title passes-btn" value="no-asistencia">No podré :(</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>