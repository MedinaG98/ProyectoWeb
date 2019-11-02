<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOGeneral
 *
 * @author Ariel May
 */
abstract class DAOGeneral {
    
    public function getConexion(){
        $dbname = "usuarios";
        $user = "root";
        $pwd = "123456";
        
        $cnx = new PDO("mysql:host=localhost;dbname=".$dbname,$user,$pwd);
        return $cnx;
    }
    
    abstract public function agregar($entidad);

    abstract public function eliminar($condicion);

    abstract public function modificar($entidad, $condicion);
    

    abstract public function consultar($condicion);
    
}
