<?php

    class DAO extends Conexion {
        private $conexion;
    public static $TABLA = 'foto';

    function __construct()
    {
        parent::__construct();
        $this->conexion = parent::conectar();
    }

    /*

    */
    function borrarFoto($cod_foto)
    {
        try {
            $cone = $this->conexion;
            $sql = "DELETE FROM " . self::$TABLA . " WHERE cod_foto = :A";
            $stmt = $cone->prepare($sql);
            $stmt->bindParam(':A', $cod_foto);
            $stmt->execute();
            echo "<br/>eliminado";
        } catch (PDOException $e) {
            echo "<br/>ERROR AL ELIMINAR FOTO " . $e->getMessage();
        }
    }

    /*

    */
    function obtenerTodoFoto()
    {
        try {
            $stmt = $this->conexion->prepare("SELECT * FROM " . self::$TABLA);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        } catch (PDOException $e) {
            echo "<br/>ERROR AL OBTENER TODOS LAS FOTOS " . $e->getMessage();
        }
    }

    /*

    */
    function obtenerFotoId($id)
    {
        try {
            $sql = $this->conexion->prepare("SELECT * FROM " . self::$TABLA . " WHERE cod_foto = $id");
            $sql->execute();
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            echo "<br/>ERROR AL OBTENER FOTO POR ID " . $e->getMessage();
        }
    }
    }
    
?>