<?php
session_start();
include '../admin/components/conexion.php';

if(isset($_POST['descargar'])){
    $key = $_POST['name'];
    $search = mysqli_query($conexion, "SELECT * FROM material WHERE material_key = '$key' ") or die(mysqli_error($conexion));

    if($row=mysqli_fetch_array($search)){
        //verifico si es una url
        if($row['material_tipo'] == 2 ){
            $_SESSION['message'] = "url";
            $_SESSION['url'] = $row['material_url'];
            $_SESSION['titulo'] = $row['material_titulo'];
            header('Location: ../docs.php');
        }elseif($row['material_tipo']==1){
            //en el caso de que sea un archivo
            $fileName = basename($row['material_name']);
            $filePath = '../admin/material_alumno/'.$fileName;
            if(!empty($fileName) && file_exists($filePath)){
                // Define headers
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: binary");
            
                // Read the file
                readfile($filePath);
                exit;
            }       
        }else{
            $_SESSION['message'] = "file_not_exist";
            header('Location: ../docs.php');
        }
    }else{
        $_SESSION['message'] = "not_found";
        header('Location: ../docs.php');
    }
}else{
    header('Location: ../index.php');
}

?>