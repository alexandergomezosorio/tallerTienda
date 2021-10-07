<?php

class DB{

    public $usuario = "root";
    public $passworld = "";
    public $servidorDB = "mysgl:host = localhost;";
    public $nombreDB = "dbname = //nombre de la base de datos";

    //constructor

    public function __construct(){}

    //metodo o accion 

    public function conectarConBD(){


        try {

            $datosGeneralesBD = $this-> servidorDB.$this->nombreDB;
            $conexion = new PDO( $datosGeneralesBD );


        } catch (PDOException  $error) {
            
            die("problema en el servidor ".$error ->getMessage());
        }

    }

}



?>