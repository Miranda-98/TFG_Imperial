<?php
    require_once "conexion.php";

    class SalaDao extends Conexion {

        private $conexion;
        public static $TABLA = 'sala';

        function __construct()
        {
            parent::__construct();
            $this->conexion = parent::conectar();
        }

        /*

        */
        function crearSala($cod_estancia, $aforo, $tipoSala)
        {
            try {
                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, aforo, tipo_sala) 
                    VALUES (:A, :B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_estancia);
                $stmt->bindParam(':B', $aforo);
                $stmt->bindParam(':C', $tipoSala);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR SALA " . $e->getMessage();
            }
        }

        /*

        */
        function borrarSala($cod_estancia)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM " . self::$TABLA . " WHERE cod_estancia = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_estancia);
                $stmt->execute();
                echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR SALA " . $e->getMessage();
            }
        }

        /*

        */
        function modificarSala($cod_estancia, $aforo, $tipoSala)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET aforo='$aforo', tipo_sala='$tipoSala' WHERE cod_estancia='$cod_estancia'";
                $cone->exec($sql);
                echo "<br/>modificado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR HABITACION " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerTodoSala()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM " . self::$TABLA);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LAS SALAS " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerSalaId($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM " . self::$TABLA . " WHERE cod_estancia = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER HABITACION POR ID " . $e->getMessage();
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