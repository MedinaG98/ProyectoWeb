<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOUsuario
 *
 * @author Ariel May
 */
//include 'conexion.php';
include '../Modelo/Usuario.php';
include '../Dao/DAOGeneral.php';

class DAOUsuario extends DAOGeneral{

    var $con;

    function __construct() {
        
    }

    public function insertar($objetoUsuario) {
        $c = conectar();
        $id = $objetoUsuario->getId();
        $nombres = $objetoUsuario->getNombres();
        $Apellidos = $objetoUsuario->getApellido();
        $dui = $objetoUsuario->getDui();

        $sql = "insert into usuario values()";
        if (!$c->query($sql)) {
            print "Error al insertar";
        } else {
            print '<script languaje="javaScript> alert("Guardado";</script>)';
        }
        mysqli_close($c);
    }
    
    public function eliminar($objetoUsuario) {
        $c = conectar();
        $id = $objetoUsuario->getId();

        $sql = "delete from usuarios where id=$id";
        if (!$c->query($sql)) {
            print "Error al eliminar";
        } else {
            print '<script languaje="javaScript> alert("Eliminado";</script>)';
        }
        mysqli_close($c);
    }
    
    public function modificar($objetoUsuario) {
        $c = $this->getConexion();
        $id = $objetoUsuario->getId();
        $nombres = $objetoUsuario->getNombres();
        $Apellidos = $objetoUsuario->getApellido();
        $dui = $objetoUsuario->getDui();
        
        $sql = "update usuarios set nombres=$nombre, apellidos=$apellidos, dui=$Dui where id=$id";
        if (!$c->query($sql)) {
            print "Error al modificar";
        } else {
            print '<script languaje="javaScript> alert("modificado";</script>)';
        }
        mysqli_close($c);
    }
    
    public function consultar($Condicion){
        
    }
    
    public function entrar($user,$pass){
        $c = $this->getConexion();        
        
        $sql = 'SELECT * from usuarios where pro_id="'.$user.'" && pro_contrasena="'.$pass.'"';
        $estado = false;
        foreach ($c->query($sql) as $fila){
            if($fila[0]==$user && $fila[1]==$pass){  
                $estado = true;
                return true;
            }else{
            }
        }
       
        $c=null;
        return $estado;
    }

}
