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
    private $SERVIDOR = "localhost:3306";
    private $BD = "base_usuarios";

    public function getConexion() {
        /* @var $cnx type */
        return  mysqli_connect($this->SERVIDOR, $this->USER, $$this->PWD);
    }

    abstract public function agregar($entidad);

    abstract public function eliminar($condicion);

    abstract public function modificar($entidad, $condicion);

    abstract public function consultar($condicion);

    static function getUSER() {
        return self::$USER;
    }

    static function getPWD() {
        return self::$PWD;
    }

    static function getSERVIDOR() {
        return self::$SERVIDOR;
    }

    static function getBD() {
        return self::$BD;
    }
    static function setUSER($USER) {
        self::$USER = $USER;
    }

    static function setPWD($PWD) {
        self::$PWD = $PWD;
    }

    static function setSERVIDOR($SERVIDOR) {
        self::$SERVIDOR = $SERVIDOR;
    }

    static function setBD($BD) {
        self::$BD = $BD;
    }


}
