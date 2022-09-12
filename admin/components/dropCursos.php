<?php
include_once 'admin/components/conexion.php';

$cont = 0;
$query = "SELECT * FROM cursos";
$cursos=mysqli_query($conexion, $query);

echo '<select class="form-control" name="nivel" id="exampleFormControlSelect1">';

while($lista=mysqli_fetch_array($cursos)){ 
    echo '<option value="'.$lista[curso_id].'">'.$lista[curso_nombre].'</option>';
}
echo '</select>';
?>
    