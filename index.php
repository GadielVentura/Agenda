<?php
/*
include 'config/conexion.php';
$db= new conexion();
*/
include'class.agenda.php';

$datos = array('nombre'=>'','domicilio' => '', 'telefono' => '', 'comentarios' => '','id' => '');
include'get.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi agenda</title>
</head>
<body>
    <form action="post.php" method="POST">
    <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="nombre" required="requiered" >

    <input type="text" name="domicilio" placeholder="calle y numero" required="requiered" value="<?php echo $datos['domicilio'];  ?>">

    <input type="text" name="telefono" placeholder="telefono" required="requiered" value="<?php echo $datos['telefono'];  ?>">

    <textarea name="comentarios" required="requiered" value="<?php echo $datos['comentarios'];  ?>">Comentarios</textarea>

    <input type="hidden" name="accion" value="insert">
    <input type="submit" name="submit" value="Enviar">

    </form>

    <?php
        include 'tabla.php';    ?>
</body>
</html>