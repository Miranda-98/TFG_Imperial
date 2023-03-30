<?php
    /*

    */

    require_once "../Modelo/CRUD.php";

    class Reserva extends CRUD {
        private $conexion;
        public static $TABLA = 'reserva';

        function __construct()
        {
            parent::__construct(self::$TABLA);
            $this->conexion = parent::conectar();
        }

        function reservarHabitacion($id)
        {
            try{
                $cone = $this->conexion;

                // sql para obtener el estado actual de la habitacion
                $sqlEstado = "SELECT estancia.estado as aux FROM habitacion, estancia WHERE estancia.cod_estancia = habitacion.cod_estancia 
                    AND habitacion.cod_habitacion = :A";
                $stmt = $cone->prepare($sqlEstado);
                $stmt->bindParam(':A', $id);
                $stmt->execute();
                $estado = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // según el estado de la habitacion se cambia con una sql u otra
                if($estado['aux'] == 'libre'){
                    $sql = "UPDATE habitacion INNER JOIN estancia ON habitacion.cod_estancia = estancia.cod_estancia SET estancia.estado = 'ocupado' 
                    WHERE habitacion.cod_habitacion = $id";
                }else {  
                    $sql = "UPDATE habitacion INNER JOIN estancia ON habitacion.cod_estancia = estancia.cod_estancia SET estancia.estado = 'libre' 
                    WHERE habitacion.cod_habitacion = $id";
                }

                $cone->exec($sql);
                // echo "<br/>modificado reserva";
            } catch(PDOException $e) {
                echo "<br/> ERROR AL RESERVAR HABITACION " . $e->getMessage();
            }
        }

        function mostrarEstadoHabitaciones()
        {
            try {
                $cone = $this->conexion;
                $sql = $cone->prepare("SELECT * FROM habitacion, estancia WHERE estancia.cod_estancia = habitacion.cod_estancia;

                    /*BETWEEN '2022-01-01' AND '2022-01-31'*/");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                // echo $resultado[0]['cod_estancia'];
                // echo $resultado[0]['estado'];


                echo "<table border: solid black 2px>
                    <tr>
                        <th>Código Estancia</th>
                        <th>Estado</th>
                        <th>Descripción</th>
                        <th>Ubicación</th>
                        <th>Planta</th>
                        <th>Tipo Estancia</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th>Localidad</th>
                        <th>Código Habitación</th>
                        <th>Número de Camas</th>
                        <th>Tipo de Baño</th>
                    </tr>";

                    for ($i = 0; $i < count($resultado); $i++) {
                        echo "<tr>
                                <td>".$resultado[$i]['cod_estancia']."</td>
                                <td>".$resultado[$i]['estado']."</td>
                                <td>".$resultado[$i]['descripcion']."</td>
                                <td>".$resultado[$i]['ubicacion']."</td>
                                <td>".$resultado[$i]['planta']."</td>
                                <td>".$resultado[$i]['tipo_estancia']."</td>
                                <td>".$resultado[$i]['precio']."</td>
                                <td>".$resultado[$i]['descuento']."</td>
                                <td>".$resultado[$i]['localidad']."</td>
                                <td>".$resultado[$i]['cod_habitacion']."</td>
                                <td>".$resultado[$i]['cod_estancia']."</td>
                                <td>".$resultado[$i]['num_camas']."</td>
                                <td>".$resultado[$i]['tipo_bano']."</td>
                            </tr>";
                        
                    }
                    
                echo "</table>";

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/> ERROR AL MOSTRAR ESTADO DE HABITACIONES " . $e->getMessage();
            }
        }



    }

    
?>