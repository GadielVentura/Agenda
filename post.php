<?php
include 'class.agenda.php';

if(isset($_POST['submit'])){

    if($_POST['accion']=='insert'){

        $nom = $_POST['nombre'];
        $dom = $_POST['domicilio'];
        $tel = $_POST['telefono'];
        $com = $_POST['comentarios'];
        
        $agenda = new Agenda ($nom,$dom,$tel,$com);

        $agenda = insert();
    }

    if($_POST['accion']=='update'){
        
    }

}else{
    header("Location: index.php");

}
?>