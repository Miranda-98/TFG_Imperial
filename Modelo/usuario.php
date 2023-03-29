<?php

    require_once "conexion.php";

    class Usuario extends Conexion {

        private $cod_usuario, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña;
        static $TABLA = 'usuario';

        function __construct(/*$cod_usuario, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña*/)
        {
            parent::__construct();
            // $this->cod_usuario = $cod_usuario;
            // $this->nombre = $nombre;
            // $this->primer_apellido = $primer_apellido;
            // $this->segundo_apellido = $segundo_apellido;
            // $this->telefono = $telefono;
            // $this->correo = $correo;
            // $this->usuario = $usuario;
            // $this->contraseña = $contraseña;
        }

        function __get($valor)
        {
            return $this->$valor;
        }
    
        function __set($valor, $nuevoValor)
        {
            $this->$valor = $nuevoValor;
        }
    }

?>