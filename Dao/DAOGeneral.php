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

    private $USER = "root";
    private $PWD = "123456";
    private $SERVIDOR = "localhost";
    private $BD = "TIENDA";

    public function getConexion() {

        $cnx = null;
        $cnx = new PDO('mysql:host=' . $this->SERVIDOR . ';dbname=' . $this->BD, $this->USER, $this->PWD);
        if ($cnx != null) {
            return $cnx;
        }
    }

    abstract public function insertar($entidad);

    abstract public function eliminar($condicion);

    abstract public function modificar($entidad);

    abstract public function consultar($condicion);

    function getUSER() {
        return $this->USER;
    }

    function getPWD() {
        return $this->PWD;
    }

    function getSERVIDOR() {
        return $this->SERVIDOR;
    }

    function getBD() {
        return $this->BD;
    }

    function setUSER($USER) {
        $this->USER = $USER;
    }

    function setPWD($PWD) {
        $this->PWD = $PWD;
    }

    function setSERVIDOR($SERVIDOR) {
        $this->SERVIDOR = $SERVIDOR;
    }

    function setBD($BD) {
        $this->BD = $BD;
    }


}
