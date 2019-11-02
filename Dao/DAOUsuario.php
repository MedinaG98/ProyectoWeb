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
include '../Dao/DAOGeneral.php';
class DAOUsuario extends DAOGeneral{
    //put your code here
   
    
    
    public function agregar($entidad) {
        Echo "Agreggar";
    }

    public function consultar($condicion) {
        
    }

    public function eliminar($condicion) {
        
    }

    public function entrar($id, $pass) {
        /* @var $cn type */
        $cn = $this->getConexion();
        $orden = "SELECT * FROM base_usuarios.usuarios WHERE pro_id=".$id." && pro_contrasena=".$pass."\"";
        $db = mysqli_select_db( $cn, $this->getBD()) or die("no se ha podico conectar a la BD");
        $resultado = mysqli_query( $cn, $orden ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        if($id==$resultado[0] && $pass==$resultado[1]){
            return true;
        } else {
            false;
        }
        
    }

    public function modificar($entidad, $condicion) {
        
    }

}
