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

        function mostrarEstadoHabitaciones()
        {
            try {
                $cone = $this->conexion;
                $sql = $cone->prepare("SELECT * FROM habitacion 
                    INNER JOIN estancia 
                    WHERE habitacion.cod_habitacion = estancia.cod_estancia

                    /*BETWEEN '2022-01-01' AND '2022-01-31'*/;");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                echo $resultado[0]['cod_estancia'];
                echo $resultado[0]['estado'];


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
                    // foreach ($resultado as $clave => $valor) {
                    //     foreach($valor as $clave2 => $valor2) {
                    //         echo "<tr><td>$valor2</td></tr>";
                    //     }
                    // }
                echo "</table>";

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/> ERROR AL MOSTRAR ESTADO DE HABITACIONES " . $e->getMessage();
            }
        }



    }

    
?>