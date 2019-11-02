<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$Usuario = $_POST["user"];
$Pwd = $_POST["pwd"];

function valida($usuario, $contrasena){
    
    if($usuario == "ArielMD" && $contrasena=="123"){
        return true;
    }else{
        return false;
    }
}

$boolean = valida($Usuario, $Pwd);

if($boolean){
    header('location:Estudiantes.php');
    
}else{
    header('location:index.php');
}
