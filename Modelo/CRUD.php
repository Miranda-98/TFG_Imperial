<?php
    require_once "conexion.php";

    class CRUD extends Conexion {
        private $conexion;

        function __construct()
        {
            parent::__construct();
            $this->conexion = parent::conectar();
        }

        /*

        */
        function borrar($tabla, $cod)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM $tabla WHERE cod_".$tabla." = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod);
                $stmt->execute();
                echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR FOTO " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerTodo($tabla)
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM $tabla");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LAS FOTOS " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerId($tabla, $id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM $tabla WHERE cod_".$tabla." = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER FOTO POR ID " . $e->getMessage();
            }
        }
    }
    
?>