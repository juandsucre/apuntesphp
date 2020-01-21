<?php 
require("config.php");

class Conexion{

    public $conexion_db;

    public function Conexion()
    {
        $this -> conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
        if($this-> conexion_db -> connect_errno){
            echo "Fallo al conectar con Msqli" . $this->conexion_db -> connect_errno;
            return;
        }
        $this->conexion_db -> set_charset(DB_CHARSET);
    }

}

?>