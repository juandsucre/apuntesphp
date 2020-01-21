<?php
require "conexion.php";


class DevuelveProductos extends Conexion{
    //con extends estoy heredadndo todas las variables y metodos que existen en conexion.php

    //solo accesibles modificador: public y protedted: en fin, reutilizacion


        //construtiel constructor de esta clase

        public function DevuelveProductos()
        {
            parent::__construct();
            //estoy ejecutando el constructor de la clase conexion;
            //realmente ejecuta todo el codigo de la conexion

        }
        public function get_productos(){

            $resultado = $this -> conexion_db -> query("SELECT * FROM productos");
            $productos = $resultado -> fetch_all(MYSQLI_ASSOC); //DEVUELVE TODAS LAS FILAS DE UN PRODUCTO
            return $productos;
        }
}


?>