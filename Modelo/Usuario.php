<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Ariel May
 */
class Usuario {

    private $id;
    private $contrasena;
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;
    private $telefono;
    private $sexo;

    function __construct($id, $contrasena, $nombre, $apellido, $edad, $correo, $telefono, $sexo) {
        $this->id = $id;
        $this->contraseña = $contrasena;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->sexo = $sexo;
    }

    function getId() {
        return $this->id;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEdad() {
        return $this->edad;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getSexo() {
        return $this->sexo;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setContraseña($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    
}
