<?php
    require_once "conexion.php";

    class HabitacionDAO extends Conexion {

        private $conexion;
        public static $TABLA = 'habitacion';

        function __construct()
        {
            parent::__construct();
            $this->conexion = parent::conectar();
        }

        /*

        */
        function crearHabitacion($cod_estancia, $numCamas, $tipoBano)
        {
            try {
                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, num_camas, tipo_bano) 
                    VALUES (:A, :B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_estancia);
                $stmt->bindParam(':B', $numCamas);
                $stmt->bindParam(':C', $tipoBano);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR HABITACION " . $e->getMessage();
            }
        }

        /*

        */
        function borrarHabitacion($cod_estancia)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM " . self::$TABLA . " WHERE cod_estancia = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_estancia);
                $stmt->execute();
                echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR HABITACION " . $e->getMessage();
            }
        }

        /*

        */
        function modificarHabitacion($cod_estancia, $numCamas, $tipoBano)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET num_camas='$numCamas', tipo_bano='$tipoBano' WHERE cod_estancia='$cod_estancia'";
                $cone->exec($sql);
                echo "<br/>modificado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR HABITACION " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerTodoHabitacion()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM " . self::$TABLA);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LOS HABITACIONES " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerHabitacionId($id)
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