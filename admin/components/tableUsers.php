<?php
$busca = mysqli_query($conexion, "SELECT * FROM user") or die(mysqli_error($conexion));
while($row = mysqli_fetch_array($busca)){ ?>
<tr>
    <td><?php echo $row['user_name']; ?></td>
    <td><?php echo $row['user_email']; ?></td>
    <td><?php echo $row['user_id']; ?></td>        
</tr>


<?php } ?>
