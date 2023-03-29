<?php
    require_once "conexion.php";

    class UsuarioDAO extends Conexion {

            private $conexion;
            public static $TABLA = 'usuario';

            function __construct()
            {
                parent::__construct();
                $this->conexion = parent::conectar();
            }

        /*

        */
        function crearUsuario($nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña) 
        {
            try {
                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_usuario, nombre, primer_apellido, segundo_apellido, telefono, correo, usuario, contraseña) 
                    VALUES ('', :B, :C, :D, :E, :F, :G, :H)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $nombre);
                $stmt->bindParam(':C', $primer_apellido);
                $stmt->bindParam(':D', $segundo_apellido);
                $stmt->bindParam(':E', $telefono);
                $stmt->bindParam(':F', $correo);
                $stmt->bindParam(':G', $usuario);
                $stmt->bindParam(':H', $contraseña);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR USUARIO " . $e->getMessage();
            }
        }   

        /*

        */
        function borrarUsuario($cod_usuario)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM " . self::$TABLA . " WHERE cod_usuario = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_usuario);
                $stmt->execute();
                echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR USUARIO " . $e->getMessage();
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
                echo "<br/>modificado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR USUARIO " . $e->getMessage();
            }
        }

        /*
            ObtieneTodosUsuarios devuelve un array de objetos con el que trabajar
        */
        function obtenerTodosUsuarios()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM " . self::$TABLA);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LOS USUARIOS " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerUsuarioId($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM " . self::$TABLA . " WHERE cod_usuario = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER USUARIO POR ID " . $e->getMessage();
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