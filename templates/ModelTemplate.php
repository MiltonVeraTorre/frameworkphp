<?php 

namespace Model;

class Cita extends ActiveRecord{
    // Base de datos
    protected static $tabla = "";
    protected static $columnasDB = [];

    //public $columna;


    public function __construct($args = [])
    {
        //$this->id = $args["id"] ?? null;
        //$this->columna = $args["columna"] ?? "";
    }
}
?>