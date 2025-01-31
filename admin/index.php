<?php

$url = "http://".$_SERVER['HTTP_HOST']."/invitacion";

include("../database/db.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM informacion ORDER BY nombre ASC;");
$sentenciaSQL->execute();
$datosInvitados=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../assets/img/icons/ico_jp.ico" type="image/x-icon">
    <title>¡Nos casamos! J&P</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url ?>/admin/">Administrador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url ?>" target="_blank">Invitación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url ?>/mensajes/" target="_blank">Mensajes</a>
            </li>
        </ul>
    </nav>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Num. pases</th>
                            <th>Asistencia</th>
                            <th>Invitación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datosInvitados as $datos) { ?>
                        <tr class="table-light">
                            <td><?php echo $datos['codigo']; ?></td>
                            <td><?php echo $datos['nombre']; ?></td>
                            <td><?php echo $datos['apellido']; ?></td>
                            <td><?php echo $datos['num_pases']; ?></td>
                            <td><?php echo $datos['asistencia']; ?></td>
                            <td><button type="button" class="btn btn-success"><a href="https://wa.me/51<?php echo $datos['celular']; ?>?text=Hola%20<?php echo $datos['nombre'].' '.$datos['apellido']; ?>,%20como%20sabes%20dentro%20de%20poco%20nos%20casamos%20y%20queremos%20que%20formes%20parte%20de%20ese%20hermoso%20momento%20con%20nosotros.%0A%0AEste%20es%20el%20link%20de%20nuestra%20invitaci%C3%B3n:%0A<?php echo $url ?>/%0A%0ATu%20c%C3%B3digo%20es%20*<?php echo $datos['codigo']; ?>*%0A%0AEsperamos%20tu%20confirmaci%C3%B3n.%20Bendiciones!" target="_blank" style="color: #FFFFFF; text-decoration: none;"><span class="ic--baseline-whatsapp"></span></a></button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>