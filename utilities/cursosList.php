<?php
include_once 'admin/components/conexion.php';

$cont = 0;
$query = "SELECT * FROM cursos";
$cursos=mysqli_query($conexion, $query);

echo '<div class="row">';

while($lista=mysqli_fetch_array($cursos)){ 
    echo '<a style="cursor: pointer" href="cursoInfo.php?curso='.$lista['curso_nombre'].'">
            <div class="span3 animated-fast flyIn">
                <div class="service-box">
                    <h2>'.$lista['curso_nombre'].'</h2>
                    <p>'.$lista['curso_descripcion'].'</p>
                </div>
            </div>
            </a>';
}
echo '<div>';
?>


<!-- <td><?php echo '<button class="btn btn-danger"><span class="glyphicon glyphicon-trash" onclick="eliminar('.$resultado['cliente_id'].')"/></span></button>'; ?></td> -->
<!-- CREAR VARIOS MODALES UNO PARA CADA CURSO -->