<?php

if((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion']=='editar')){

    $id = $_GET['id'];

    $agenda = Agenda::soloId($id);

    $array = $agenda->selecId();
    $datos = $array->fetch_array();
}

if((isset($_GET['accion'])) && (isset($_GET['id']))  && ($_GET['accion']=='eliminar')){

    
}

?>