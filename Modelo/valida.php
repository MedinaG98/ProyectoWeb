<?php

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

if($boolean){
    header('location:Estudiantes.php');
    
}else{
    header('location:index.php');
}
