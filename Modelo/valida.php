<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$Usuario = $_POST["user"];
$Pwd = $_POST["pwd"];
include '../Dao/DAOUsuario.php';

function valida($usuario, $contrasena){
    $daoUser = new DAOUsuario();
    return $daoUser->entrar($usuario, $contrasena);
}

$boolean = valida($Usuario, $Pwd);
echo $boolean;
if ($boolean) {
    if (isset($_POST['user'])) {
        $_SESSION['Usuario'] = $_POST["user"];
    }
    header('location:../vista/Articulos.php');
} else {
    header('location:../vista/index.php');
}
