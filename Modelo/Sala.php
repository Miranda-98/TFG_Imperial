<?php
    require_once "Estancia.php";

    class Sala extends Estancia {

        private $conexion, $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $aforo, $tipoSala;
        public static $TABLA = 'sala';

        function __construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $aforo, $tipoSala)
        {
            parent::__construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad);
            $this->conexion = parent::conectar();
            $this->cod_estancia = $cod_estancia;
            $this->aforo = $aforo;
            $this->tipoSala = $tipoSala;
        }

        /*

        */
        function crearSala()
        {
            try {
                $a2 = $this->__get('cod_estancia');
                $a3 = $this->__get('aforo');
                $a4 = $this->__get('tipoSala');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, aforo, tipo_sala) 
                    VALUES (:A, :B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $a2);
                $stmt->bindParam(':B', $a3);
                $stmt->bindParam(':C', $a4);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR SALA " . $e->getMessage();
            }
        }


        /*

        */
        function modificarSala($cod_sala, $cod_estancia, $aforo, $tipoSala)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET aforo='$aforo', tipo_sala='$tipoSala', cod_estancia='$cod_estancia' WHERE cod_sala='$cod_sala'";
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