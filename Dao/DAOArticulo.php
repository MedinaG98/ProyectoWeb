<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOArticulo
 *
 * @author Ariel May
 */
include '../Dao/DAOGeneral.php';
class DAOArticulo extends DAOGeneral{
    
    public function insertar($entidad) {
        $c = $this->getConexion();
        
        $id = $entidad->getId();
        $pass = $entidad->getContrasena();
        $nombres = $entidad->getNombre();
        $apellidos = $entidad->getApellido();
        $edad = $entidad->getEdad();
        $correo = $entidad->getCorreo();
        $telefono = $entidad->getTelefono();
        $sexo = $entidad->getSexo();
       
        $sql = 'insert into usuarios values ("'.$id.'","'.$pass.'","'.$nombres.'","'.$apellidos.'","'.$edad.'","'.$correo.'","'.$telefono.'","'.$sexo.'")';

        if (!$c->query($sql)) {
            return false;
        } else {
            print '<script languaje="javaScript> alert("Guardado";</script>)';
            return true;
        }
        $c=null;
    }
    
    public function eliminar($condicion) {
        $c = $this->getConexion();
        $id = $entidad->getId();

        $sql = "delete from usuarios where id=$id";
        if (!$c->query($sql)) {
            print "Error al eliminar";
        } else {
            print '<script languaje="javaScript> alert("Eliminado";</script>)';
        }
        
        $c=null;
        
    }
    
    public function modificar($entidad) {
        $id = $entidad->getId();
        $pass = $entidad->getContrasena();
        $nombres = $entidad->getNombres();
        $apellidos = $entidad->getApellido();
        $edad = $entidad->getEdad();
        $correo = $entidad->getCorreo();
        $telefono = $entidad->getTelefono();
        $sexo = $entidad->getSexo();

        $sql = "update usuarios set nombres=$nombre, apellidos=$apellidos, dui=$Dui where id=$id";
        if (!$c->query($sql)) {
            print "Error al modificar";
        } else {
            print '<script languaje="javaScript> alert("modificado";</script>)';
        }
        mysqli_close($c);
    }
    //falta terminar
    public function consultar($condicion) {
        
    }

}
