<?php
    require_once "Estancia.php";

    class Habitacion extends Estancia {

        private $conexion, $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $num_camas, $tipoBano;
        public static $TABLA = 'habitacion';

        function __construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $num_camas, $tipo_bano)
        {
            parent::__construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad);
            $this->conexion = parent::conectar();
            $this->cod_estancia = $cod_estancia;
            $this->num_camas = $num_camas;
            $this->tipo_bano = $tipo_bano;
        }

        /*

        */
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