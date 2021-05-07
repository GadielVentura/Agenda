<?php

class Conexion extends mysqli{
    
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = 'mantequilla';
    private $DB_NAME = 'miagenda';

    public function __construct(){

        parent:: __construct($this->DB_HOST,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);

        $this->set_charset('utf8');

        $this->connect_errno ? die('Error al conectar'. mysqli_connect_errno()) : $m ='conectado';

//        echo $m;
    }


}

?>