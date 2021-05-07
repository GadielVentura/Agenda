<?php
include 'config/conexion.php';

class Agenda{

    protected $nombre;
    protected $domicilio;
    protected $telefono;
    protected $comentarios;
    protected $id;

    public function __construct($nom,$dom,$tel,$com,$id=''){

        $this->nombre=$nom;
        $this->domicilio=$dom;
        $this->telefono=$tel;
        $this->comentarios=$com;
        $this->id=$id;
    }

    public function insert(){

        $db = new conexion();
        $query = "INSERT INTO contactos(nombre,domicilio,telefono,comentarios) VALUES('$this->nombre','$this->domicilio','$this->telefono','$this->comentarios')";

        $db->query($query) ? header("Location: index.php?res=insertado") : header("Location: index.php?res=error");
    }
}

?>