<?php
    require_once "Estancia.php";

    class Habitacion extends Estancia {

        private $conexion, $cod_estancia, $numCamas, $tipo_bano;
        public static $TABLA = 'habitacion';

        function __construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $num_camas, $tipo_bano)
        {
            parent::__construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $num_camas, $tipo_bano);
            $this->conexion = parent::conectar();
            $this->cod_estancia = $cod_estancia;
            $this->num_camas = $num_camas;
            $this->tipo_bano = $tipo_bano;
        }

        /*

        */

        function obtenerTodoHabitacion()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM estancia, habitacion WHERE estancia.cod_estancia = habitacion.cod_estancia;");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LAS FOTOS " . $e->getMessage();
            }
        }

        function obtenerIdHabitacion($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM estancia, habitacion WHERE estancia.cod_estancia = habitacion.cod_estancia AND cod_habitacion = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER FOTO POR ID " . $e->getMessage();
            }
        }


        function crearHabitacion()
        {
            try {
                $a2 = $this->__get('cod_estancia');
                $a3 = $this->__get('num_camas');
                $a4 = $this->__get('tipo_bano');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, num_camas, tipo_bano) 
                    VALUES (:A, :B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $a2);
                $stmt->bindParam(':B', $a3);
                $stmt->bindParam(':C', $a4);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR HABITACION " . $e->getMessage();
            }
        }

        /*

        */
        function modificarHabitacion($cod_habitacion, $cod_estancia, $numCamas, $tipoBano)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET num_camas='$numCamas', tipo_bano='$tipoBano', cod_estancia='$cod_estancia' WHERE cod_habitacion='$cod_habitacion'";
                $cone->exec($sql);
                echo "<br/>modificado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR HABITACION " . $e->getMessage();
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