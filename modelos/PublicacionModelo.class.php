<?php

    require "../utils/autoload.php";

    class PublicacionModelo extends Modelo
    {
        public $Autor;
        public $FechaYHora;
        public $Cuerpo;

        public function __construct()
        {
            parent::__construct();
        }
        

        public function Guardar()
        {
            $sql = "INSERT INTO publicacion VALUES ('" . 
            $this -> Autor . "', 
            CURRENT_TIMESTAMP(), '" . 
            $this -> Cuerpo . "');";

            return $this -> conexionBaseDeDatos -> query($sql);
        }        


        public function ObtenerTodas()
        {
            $sql = "SELECT usr.complete_name autor, pub.fecha_hora, pub.cuerpo 
            FROM publicacion pub, usuario usr 
            WHERE pub.autor = usr.username 
            ORDER BY pub.fecha_hora DESC;";
            $filas = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC);
            $resultado = array();

            foreach($filas as $fila)
            {
                $publicacion = new PublicacionModelo();
                $publicacion -> Autor = $fila['autor'];
                $publicacion -> FechaYHora = $fila['fecha_hora'];
                $publicacion -> Cuerpo = $fila['cuerpo'];

                array_push($resultado,$publicacion);
            }
            return $resultado;
        }

    }
