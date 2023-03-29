<?php
    require_once "conexion.php";

    class FotoDAO extends Conexion {

        private $conexion;
        public static $TABLA = 'foto';

        function __construct()
        {
            parent::__construct();
            $this->conexion = parent::conectar();
        }

        /*

        */
        function crearFoto($cod_estancia, $foto)
        {
            try {
                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, foto) 
                    VALUES (:B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $cod_estancia);
                $stmt->bindParam(':C', $foto);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR FOTO " . $e->getMessage();
            }
        }

        /*

        */
        function borrarFoto($cod_foto)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM " . self::$TABLA . " WHERE cod_foto = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_foto);
                $stmt->execute();
                echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR FOTO " . $e->getMessage();
            }
        }

        /*

        */
        function modificarFoto($cod_foto, $cod_estancia, $foto)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET cod_estancia='$cod_estancia', foto='$foto' WHERE cod_foto='$cod_foto'";
                $cone->exec($sql);
                echo "<br/>modificado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR FOTO " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerTodoFoto()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM " . self::$TABLA);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LAS FOTOS " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerFotoId($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM " . self::$TABLA . " WHERE cod_foto = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER FOTO POR ID " . $e->getMessage();
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