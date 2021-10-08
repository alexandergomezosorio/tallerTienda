<?php

class DB{
    //atributos=variables=datos

    public $usuario = "root";
    public $passwordDB = "";
    public $servidorDB = "mysgl:host = localhost;";
    public $nombreDB = "dbname = tiendabello";

    //constructor

    public function __construct(){}

    //metodo o accion 

    public function conectarConBD(){


        try {

            $datosGeneralesBD = $this-> servidorDB.$this->nombreDB;
            $conexion = new PDO( $datosGeneralesBD,$this->usuario,$this->passwordDB );
            echo("exito de conexion ala DB");


        } catch (PDOException  $error) {
            
            die("problema en el servidor ".$error ->getMessage());
        }

    }

}



?>