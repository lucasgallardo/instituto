<?php
include_once 'admin/components/conexion.php';

$cont = 0;
$query = "SELECT * FROM cursos";
$cursos=mysqli_query($conexion, $query);

echo '<option>Seleccionar una opción</option>';

while($lista=mysqli_fetch_array($cursos)){ 
    echo '<option value="'.$lista['curso_nombre'].'">'.$lista['curso_nombre'].'</option>';
}
?>

