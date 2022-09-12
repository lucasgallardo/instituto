<?php
session_start();

function is_logued(){    
    if(!isset($_SESSION['user'])){
        header('Location: login.php');
    }
}

function user_connected(){
  include_once 'conexion.php';
  $id = $_SESSION['user'];
  $nombre = 0;
  return $_SESSION['user'];
}
?>
