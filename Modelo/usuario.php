<?php
    require_once "CRUD.php";

    class Usuario extends CRUD {

            private $conexion, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña, $rol;
            public static $TABLA = 'usuario';

            function __construct($nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña, $rol)
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
                $this->rol = $rol;

            }

        /*

        */
        function crearUsuario() 
        {
            try {
                $nombre = $this->__get('nombre');
                $primer_Ape = $this->__get('primer_apellido');
                $segundo_Ape = $this->__get('segundo_apellido');
                $tel = $this->__get('telefono');
                $email = $this->__get('correo');
                $user = $this->__get('usuario');
                $contraseña = password_hash($this->__get('contraseña'),PASSWORD_DEFAULT);
                $rol = $this->__get('rol');
                // $a7 = $this->__get('contraseña');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_usuario, nombre, primer_apellido, segundo_apellido, telefono, correo, usuario, contraseña,rol) 
                    VALUES ('', :B, :C, :D, :E, :F, :G, :H, :I)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $nombre);
                $stmt->bindParam(':C', $primer_Ape);
                $stmt->bindParam(':D', $segundo_Ape);
                $stmt->bindParam(':E', $tel);
                $stmt->bindParam(':F', $email);
                $stmt->bindParam(':G', $user);
                $stmt->bindParam(':H', $contraseña);
                $stmt->bindParam(':I', $rol);
                $stmt->execute();
                // echo '<br/>insertado';
                return true;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR USUARIO " . $e->getMessage();
                return false;
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

        */
        function comprobarUsuarioBD($id,$contrasenia){
           
            // ALTER TABLE `usuario` CHANGE `password` `password` VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

            try {
                $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE usuario LIKE '$id' ");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                if(!empty($resultado[0])){
                    //contraseña y comparamos si coincide
                    if(password_verify($contrasenia, $resultado[0]['contraseña'])){
                        echo "si";
                        return true;
                    }else{
                        echo "no";
                        return false;
                        
                    }
                    
                }else
                return false;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER POR ID " . $e->getMessage();
                
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
