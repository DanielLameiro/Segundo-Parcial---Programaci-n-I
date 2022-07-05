<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        require "../utils/autoload.php";

        if(isset($_SESSION['autenticado']))
            {
                echo "Bienvenido " . $_SESSION['nombreUsuario'];
                echo "<br /><a href='/cerrarSesion'>Salir</a></br></br><hr></br>";
            }
            else
            {
                echo "<a href='/login'>Iniciar sesión</a></br></br><hr></br>";
            }

            $publicaciones = PublicacionControlador::ListarPublicaciones();

            foreach ($publicaciones as $publicacion)
            {
                $autor = $publicacion['autor'];
                $fecha_hora = $publicacion['fecha_hora'];
                $cuerpo = $publicacion['cuerpo'];

                echo "Publicado por " . $autor . " el " . $fecha_hora . "</br></br>";
                echo "Mensaje: </br>";
                echo $cuerpo . "</br></br><hr></br>";

        }

    ?>
    
</body>
</html>