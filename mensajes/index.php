<?php

$url = "http://".$_SERVER['HTTP_HOST']."/invitacion";

include("../database/db.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM informacion");
$sentenciaSQL->execute();
$datosInvitados=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php foreach($datosInvitados as $datos) { ?>
        <?php if ($datos['mensaje'] != '') { ?>
            <div class="message__card">
                <div class="card__title">
                    <img loading="lazy" src="../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                    <p><?php echo $datos['nombre'].' '.$datos['apellido'] ?></p>
                    <img loading="lazy" src="../assets/img/icons/sunflower-icon.webp" alt="Ícono de girasol">
                </div>
                <div class="card__body">
                    <p><?php echo $datos['mensaje'] ?></p>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

    <footer class="foot__verse">
        <p>"Y si alguno prevaleciere contra uno, dos le resistirán;</p>
        <p>y cordón de tres dobleces no se rompe pronto"</p>
        <p>(Eclesiastés 4:12)</p>
    </footer>
</body>
</html>