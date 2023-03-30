<?php
    require_once "CRUD.php";

    class Estancia extends CRUD {

            private $conexion, $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad;
            public static $TABLA = 'estancia';

            function __construct($estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad)
            {
                parent::__construct(self::$TABLA);
                $this->conexion = parent::conectar();
                $this->estado = $estado;
                $this->descripcion = $descripcion;
                $this->ubicacion = $ubicacion;
                $this->planta = $planta;
                $this->tipo_estancia = $tipo_estancia;
                $this->precio = $precio;
                $this->descuento = $descuento;
                $this->localidad = $localidad;
            }

        /*

        */
        function crearEstancia() 
        {
            try {
                $a1 = $this->__get('estado');
                $a2 = $this->__get('descripcion');
                $a3 = $this->__get('ubicacion');
                $a4 = $this->__get('planta');
                $a5 = $this->__get('tipo_estancia');
                $a6 = $this->__get('precio');
                $a7 = $this->__get('descuento');
                $a8 = $this->__get('localidad');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, estado, descripcion, ubicacion, planta, tipo_estancia, precio, descuento, localidad) 
                    VALUES ('', :B, :C, :D, :E, :F, :G, :H, :I)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $a1);
                $stmt->bindParam(':C', $a2);
                $stmt->bindParam(':D', $a3);
                $stmt->bindParam(':E', $a4);
                $stmt->bindParam(':F', $a5);
                $stmt->bindParam(':G', $a6);
                $stmt->bindParam(':H', $a7);
                $stmt->bindParam(':I', $a8);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR ESTANCIA " . $e->getMessage();
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