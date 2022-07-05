<?php 
    require "../utils/autoload.php";

    class UsuarioControlador {
        public static function Alta($context){
            $u = new UsuarioModelo();
            $u -> Nombre = $context['post']['usuario'];
            $u -> NombreCompleto = $context['post']['nombre'];
            $u -> Password = $context['post']['password'];
            $u -> Guardar();
            header("Location:/login");
        }
    }

