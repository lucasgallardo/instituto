<?php 
$busca = mysqli_query($conexion, "SELECT * FROM material") or die(mysqli_error($conexion));
while($row = mysqli_fetch_array($busca)){ ?>
<tr>
    <td><?php echo level_name($row['material_level'], $conexion); ?></td>
    <td><?php echo $row['material_name']; ?></td>
    <td><?php echo $row['material_key']; ?></td>
    <td><?php echo $row['material_number']; ?></td>
    <td><?php echo $row['material_id']; ?></td>        
</tr>


<?php } 
function level_name($id, $conexion){
    $curso = mysqli_query($conexion, "SELECT curso_nombre FROM cursos WHERE curso_id = '$id' ") or die(mysqli_error($conexion));
    if($resultado = mysqli_fetch_array($curso)){
        return $resultado['curso_nombre'];
    }else{
        return " - ";
    }
}

?>
  