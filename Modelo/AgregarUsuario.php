<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Dao/DAOUsuario.php';

$id = $_POST["id"];
$pass = $_POST["contrasena"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];

function nuevoUsuario($usuario){
    $daoUser = new DAOUsuario();
    return $daoUser->insertar($usuario);
}
$nuevoUsuario = new Usuario($id, $pass, $nombre, $apellido, $edad, $correo, $telefono, $genero);
$nuevo = nuevoUsuario($nuevoUsuario);
if($nuevo){
    echo 'Se agrego usuario';
}else{
    //echo 'No se agrego';
}