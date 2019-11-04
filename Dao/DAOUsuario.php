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
        $c = $this->getConexion();
        
        $id = $objetoUsuario->getId();
        $pass = $objetoUsuario->getContrasena();
        $nombres = $objetoUsuario->getNombre();
        $apellidos = $objetoUsuario->getApellido();
        $edad = $objetoUsuario->getEdad();
        $correo = $objetoUsuario->getCorreo();
        $telefono = $objetoUsuario->getTelefono();
        $sexo = $objetoUsuario->getSexo();
       
        $sql = 'insert into usuarios values ("'.$id.'","'.$pass.'","'.$nombres.'","'.$apellidos.'","'.$edad.'","'.$correo.'","'.$telefono.'","'.$sexo.'")';

        if (!$c->query($sql)) {
            return false;
        } else {
            print '<script languaje="javaScript> alert("Guardado";</script>)';
            return true;
        }
        $c=null;
    }
    
    public function eliminar($objetoUsuario) {
        $c = $this->getConexion();
        $id = $objetoUsuario->getId();

        $sql = "delete from usuarios where id=$id";
        if (!$c->query($sql)) {
            print "Error al eliminar";
        } else {
            print '<script languaje="javaScript> alert("Eliminado";</script>)';
        }
        
        $c=null;
    }
    
    //Falta Terminar
    public function modificar($objetoUsuario) {
        $id = $objetoUsuario->getId();
        $pass = $objetoUsuario->getContrasena();
        $nombres = $objetoUsuario->getNombres();
        $apellidos = $objetoUsuario->getApellido();
        $edad = $objetoUsuario->getEdad();
        $correo = $objetoUsuario->getCorreo();
        $telefono = $objetoUsuario->getTelefono();
        $sexo = $objetoUsuario->getSexo();
        
        $sql = "update usuarios set nombres=$nombre, apellidos=$apellidos, dui=$Dui where id=$id";
        if (!$c->query($sql)) {
            print "Error al modificar";
        } else {
            print '<script languaje="javaScript> alert("modificado";</script>)';
        }
        mysqli_close($c);
    }
    
    //falta Terminar
    public function consultar($Condicion){
        
    }
    
    public function entrar($user,$pass){
        $c = $this->getConexion();        
        
        $sql = 'SELECT * from usuarios where u_Id="'.$user.'" && u_Contrasena="'.$pass.'"';
        echo $sql;
        $estado = false;
        foreach ($c->query($sql) as $fila){
            if($fila[0]==$user && $fila[1]==$pass){  
                //$estado = true;
                return true;
            }else{
            }
        }
       
        $c=null;
        return $estado;
    }

}
