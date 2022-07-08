<?php
require "../utils/autoload.php";
$publicaciones = PublicacionControlador::ListarTodas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_SESSION['autenticado'])) : ?>
        Bienvenido <?= $_SESSION['nombreUsuario'] ?>
        </br><br /><a href='/publicaciones/redactar'>Redactar publicación</a>
        <br /><a href='/cerrarSesion'>Salir</a></br></br>

    <?php else : ?>

        <a href='/login'>Iniciar sesión</a></br></br>
    <?php endif; ?>

    Últimas publicaciones:
    <hr></br>

    <?php foreach ($publicaciones as $publicacion) : ?>
        Publicado por <?= $publicacion['autor']; ?>
        el <?= $publicacion['fecha_hora']; ?> </br></br>
        Mensaje: </br> <?= $publicacion['cuerpo']; ?></br></br>
        <hr></br>

    <?php endforeach ?>

</body>

</html>