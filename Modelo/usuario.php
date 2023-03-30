<?php
    require_once "CRUD.php";

    class Usuario extends CRUD {

            private $conexion, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña;
            public static $TABLA = 'usuario';

            function __construct($nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña)
            {
                parent::__construct(self::$TABLA);
                $this->conexion = parent::conectar();
                $this->nombre = $nombre;
                $this->primer_apellido = $primer_apellido;
                $this->segundo_apellido = $segundo_apellido;
                $this->telefono = $telefono;
                $this->correo = $correo;
                $this->usuario = $usuario;
                $this->contraseña = $contraseña;

            }

        /*

        */
        function crearUsuario() 
        {
            try {
                $a1 = $this->__get('nombre');
                $a2 = $this->__get('primer_apellido');
                $a3 = $this->__get('segundo_apellido');
                $a4 = $this->__get('telefono');
                $a5 = $this->__get('correo');
                $a6 = $this->__get('usuario');
                $a7 = $this->__get('contraseña');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_usuario, nombre, primer_apellido, segundo_apellido, telefono, correo, usuario, contraseña) 
                    VALUES ('', :B, :C, :D, :E, :F, :G, :H)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $a1);
                $stmt->bindParam(':C', $a2);
                $stmt->bindParam(':D', $a3);
                $stmt->bindParam(':E', $a4);
                $stmt->bindParam(':F', $a5);
                $stmt->bindParam(':G', $a6);
                $stmt->bindParam(':H', $a7);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR USUARIO " . $e->getMessage();
            }
        }   


        /*

        */
        function modificarUsuario($cod_usuario, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña) 
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA ." SET nombre='$nombre', primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido', telefono='$telefono',
                    correo='$correo', usuario='$usuario', contraseña='$contraseña' WHERE cod_usuario='$cod_usuario'";
                $cone->exec($sql);
                echo "<br/>modificado usuario";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR USUARIO " . $e->getMessage();
            }
        }

        

        /*
            getter y setter magico
        */
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