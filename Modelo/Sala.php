<?php
    require_once "Estancia.php";

    class Sala extends Estancia {

        private $conexion,$cod_estancia, $aforo, $tipoSala;
        public static $TABLA = 'sala';

        function __construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $aforo, $tipo_sala)
        {
            parent::__construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad);
            $this->conexion = parent::conectar();
            $this->cod_estancia = $cod_estancia;
            $this->aforo = $aforo;
            $this->tipo_sala = $tipo_sala;
        }

        /*

        */
        function obtenerTodoSala()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM estancia, sala WHERE estancia.cod_estancia = sala.cod_estancia;");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LAS FOTOS " . $e->getMessage();
            }
        } 
        function crearSala()
        {
            try {
                $a2 = $this->__get('cod_estancia');
                $a3 = $this->__get('aforo');
                $a4 = $this->__get('tipo_sala');

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
        function obtenerIdSala($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM estancia, sala WHERE estancia.cod_estancia = sala.cod_estancia AND cod_sala = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER SALA POR ID " . $e->getMessage();
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
                echo "<br/>modificado sala";
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