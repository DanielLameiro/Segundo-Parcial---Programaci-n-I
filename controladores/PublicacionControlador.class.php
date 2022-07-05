<?php

    require "../utils/autoload.php";

    class PublicacionControlador
    {

        public static function ListarPublicaciones()
        {
            $publicacion = new PublicacionModelo();
            $publicaciones = $publicacion -> ObtenerPublicaciones();
            $resultado = array();
            
            foreach ($publicacion as $elemento)
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