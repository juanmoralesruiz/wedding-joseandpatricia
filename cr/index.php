<?php

include("../database/db.php");
session_start();

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$action = (isset($_POST['action'])) ? $_POST['action'] : "";

switch ($action) {
    case 'go-regalo':
        $sentenciaSQL = $conexion->prepare("UPDATE regalos SET estado='escogido' WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        header("Location: ../#gh");
        break;
    case 'no-regalo':
        $sentenciaSQL = $conexion->prepare("UPDATE regalos SET estado='disponible' WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        header("Location: ../#gh");
        break;
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM regalos");
$sentenciaSQL->execute();
$datosRegalos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-2.css">
    <link rel="shortcut icon" href="../assets/img/icons/ico_jp.ico" type="image/x-icon">
    <title>¡Nos casamos! J&P</title>
</head>

<body>

    <!-- Sección de lista de regalos -->
    <section class="gift">
        <img loading="lazy" src="../assets/img/icons/separator.webp" alt="Separador de girasoles" class="sunflower-separator">
        <p class="section__title">Regalos</p>
        <div class="gift__text">
            <p class="little-text">"EL MEJOR REGALO PARA NOSOTROS ES CONTAR CON TU PRESENCIA EN ESTE DÍA TAN IMPORTANTE, PERO SI QUIERES TENER UN DETALLE CON NOSOTROS AYÚDANOS A CONTRIBUIR CON NUESTRA CASITA SOÑADA"</p>
        </div>
        <button class="main-btn name__title" id="open-gift">
            <img loading="lazy" class="sunflower-icon" src="../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
            <p>LISTA DE REGALOS</p>
            <img loading="lazy" class="sunflower-icon" src="../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
        </button>
    </section>

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

    <?php foreach ($datosRegalos as $regalos) {
        if ($regalos['estado'] == 'pendiente') { ?>
            <div class="modal-regalo">
                <div class="modal-regalo-body">
                    <p>Por favor, confírmanos tu apoyo con <?php echo $regalos['articulo'] ?>:</p>
                    <p class="name__regalo"><?php echo $regalos['nombre'] ?></p>
                    <form method="POST" enctype="multipart/form-data" class="btnGroup-regalo">
                        <input type="hidden" name="txtID" value="<?php echo $regalos['id'] ?>">
                        <button type="submit" name="action" class="item__name normal-text" value="go-regalo"><a href="https://wa.link/eds8p0" target="_blank">Confirmar</a></button>
                        <button type="submit" name="action" class="item__name normal-text" value="no-regalo">Cancelar</button>
                    </form>
                </div>
            </div>
        <?php }
    } ?>
</body>

</html>