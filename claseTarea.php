<?php
class Tarea{
    public $nombre = null;
    public $fechaCreacion = null;
    public $estado = false;

    function __construct(string $nombre, string $fechaCreacion, bool $estado){
        $this->nombre = $nombre;
        $this->fechaCreacion = $fechaCreacion; 
        $this->estado = $estado;
    }

    /**
     * Get the value of id
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    
    /**
     * Get the value of descripcion
     */ 
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

}
?>