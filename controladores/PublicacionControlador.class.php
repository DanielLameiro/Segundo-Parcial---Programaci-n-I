<?php

    require "../utils/autoload.php";

    class PublicacionControlador
    {

        public static function Alta($context)
        {
            $publicacion = new PublicacionModelo();
            $publicacion -> Autor = $_SESSION['nombreUsuario'];
            $publicacion -> Cuerpo = $context['post']['cuerpo'];

            $publicacion -> Guardar();
            header("Location: /");
        }

        public static function ListarTodas()
        {
            $publicacion = new PublicacionModelo();
            $publicaciones = $publicacion -> ObtenerTodas();
            $resultado = array();
            
            foreach ($publicaciones as $elemento)
            {
                $array = array
                (
                    'autor' => $elemento -> Autor,
                    'fecha_hora' => $elemento -> FechaYHora,
                    'cuerpo' => $elemento -> Cuerpo,
                );
                array_push($resultado,$array);
            }
            return $resultado;
        }

    }