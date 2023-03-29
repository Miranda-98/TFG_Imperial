<?php
    require_once "conexion.php";

    class EstanciaDAO extends Conexion {

            private $conexion;
            public static $TABLA = 'estancia';

            function __construct()
            {
                parent::__construct();
                $this->conexion = parent::conectar();
            }

        /*

        */
        function crearEstancia($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad) 
        {
            try {
                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, estado, descripcion, ubicacion, planta, tipo_estancia, precio, descuento, localidad) 
                    VALUES ('', :B, :C, :D, :E, :F, :G, :H, :I)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $estado);
                $stmt->bindParam(':C', $descripcion);
                $stmt->bindParam(':D', $ubicacion);
                $stmt->bindParam(':E', $planta);
                $stmt->bindParam(':F', $tipo_estancia);
                $stmt->bindParam(':G', $precio);
                $stmt->bindParam(':H', $descuento);
                $stmt->bindParam(':I', $localidad);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR ESTANCIA " . $e->getMessage();
            }
        }   

        /*

        */
        function borrarEstancia($cod_estancia)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM " . self::$TABLA . " WHERE cod_estancia = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod_estancia);
                $stmt->execute();
                echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR ESTANCIA " . $e->getMessage();
            }
        }

        /*

        */
        function modificarEstancia($cod_estancia, $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad) 
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA ." SET estado='$estado', descripcion='$descripcion', ubicacion='$ubicacion', planta='$planta', 
                tipo_estancia='$tipo_estancia',
                 precio='$precio', descuento='$descuento', localidad='$localidad' WHERE cod_estancia='$cod_estancia'";
                $cone->exec($sql);
                echo "<br/>modificado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR ESTANCIA " . $e->getMessage();
            }
        }

        /*
            ObtieneTodosprecios devuelve un array de objetos con el que trabajar
        */
        function obtenerTodosEstancia()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM " . self::$TABLA);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODAS LAS ESTANCIAS " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerEstanciaId($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM " . self::$TABLA . " WHERE cod_estancia = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER precio POR ID " . $e->getMessage();
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