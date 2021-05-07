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

    static function ningunDato(){
        return new self('','','','');
    }

    static function soloId($id){

        return new self('','','','',$id);
    }

    public function insert(){

        $db = new Conexion();
        $query = "INSERT INTO contactos(nombre,domicilio,telefono,comentarios) VALUES('$this->nombre','$this->domicilio','$this->telefono','$this->comentarios')";

        $db->query($query) ? header("Location: index.php?res=insertado") : header("Location: index.php?res=error");
    }

    public function Update(){

        $db = new Conexion();
        $query = "UPDATE contactos SET nombre=, domicilio=,telefono=,comentario= WHERE id= ";

        $db->query($query) ? header("Location: index.php?res=insertado") : header("Location: index.php?res=error");
    }

    public function selecId(){

        $db = new Conexion();
        $query="SELECT * FROM contactos WHERE id=$this->id";
        $resul=$db->query($query);

        return $resul;


    }

    public function select(){

        $db = new Conexion();
        $query="SELECT * FROM contactos";
        $resul=$db->query($query);

        return $resul;


    }
}

?>