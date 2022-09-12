<?php 
$busca = mysqli_query($conexion, "SELECT * FROM cursos") or die(mysqli_error($conexion));
while($row = mysqli_fetch_array($busca)){ ?>
<tr>
    <td><?php echo $row['curso_nombre']; ?></td>
    <td><?php echo $row['curso_descripcion']; ?></td>
    <td><?php echo $row['curso_horario']; ?></td>
    <td><?php echo $row['curso_id']; ?></td>        
</tr>


<?php } ?>
  