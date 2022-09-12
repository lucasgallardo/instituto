<?php
$query = "SELECT * FROM user WHERE user_id = '$_SESSION[user]' ";
$busca = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
if ($row = mysqli_fetch_array($busca)) { ?>
  <form action="components/save_profile.php" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="name" placeholder="Nombre" value="<?php echo $row['user_name']; ?>">
      </div>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-user" name="email" placeholder="E-Mail" value="<?php echo $row['user_email']; ?>">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-6">
        <input type="password" class="form-control form-control-user" name="pass" placeholder="Contraseña">
      </div>
    </div>
    <button class="btn btn-primary btn-user btn-block" type="submit" name="save_profile">
      Guardar
    </button>
  </form>
<?php }
 ?>
