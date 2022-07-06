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
                echo '
                <form action="/publicaciones/redactar" method="post">
                    <p>Redactar publicación:</p>
                    <textarea name="cuerpo" rows="5" cols="50"></textarea></br>
                    <input type="submit" value="Publicar"></br></br>
                    <a href="/">Volver</a>
                </form>';
            }
            else
            {
                header("Location: /login");
            }

    ?>

</body>
</html>