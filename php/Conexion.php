<?php
class Conexion
{
    private $conexion;

    public function __construct($servidor, $usuario, $contrasenia, $nombrebd)
    {
        $this->conexion = new mysqli($servidor, $usuario, $contrasenia, $nombrebd);
        if ($this->conexion->connect_error) {
            die("Conexion fallida: " . $this->conexion->connect_error);
        }
    }

    public function obtenerConexion()
    {
        return $this->conexion;
    }
}

?>