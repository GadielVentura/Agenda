<table border="2">
<th>id</th>
<th>Nombre</th>
<th>Domicilio</th>
<th>Telefono</th>
<th>Comentarios</th>
<th>Editar</th>
<th>Eliminar</th>

<?php
$agenda = Agenda::ningunDato();

$datos = $agenda->select();

while($row = $datos->fetch_array()){

    echo '<tr>';
    echo "<td> $row[id]</td>";
    echo "<td> $row[nombre]</td>";
    echo "<td> $row[domicilio]</td>";
    echo "<td> $row[telefono]</td>";
    echo "<td> $row[comentarios]</td>";
    echo '</tr>';
}

?>

</table>