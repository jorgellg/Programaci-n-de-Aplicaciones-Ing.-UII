<?php

/**
 * Description of Vehiculo
 * Clase padre 
 * @author Jorge Luis L. G.
 */
class Vehiculo {
    
    /**
     * Constructor de la clase 
     */
    public function __construct() {
        
    }

    /**
     * Atributo $Entidad de la clase Vehiculo
     */
    protected $Entidad;
    
    /**
     * Atributo $Marca de la clase Vehiculo
     */
    protected $Marca;
    
    /**
     * Atributo $Modelo de la clase Vehiculo
     */
    protected $Modelo;
    
    /**
     * Atributo $TarjetaCirculacion de la clase Vehiculo
     */
    protected $TarjetaCirculacion;
    
    /**
     * Metodo getter del Atributo $Entidad
     * @return type
     */
    public function getEntidad() {
        return $this->Entidad;
    }
    
    /**
    * Metodo getter del Atributo $Marca
    * @return type
    */
    public function getMarca() {
        return $this->Marca;
    }
    
    /**
     * Metodo getter del Atributo $Modelo
     * @return type
     */
    public function getModelo() {
        return $this->Modelo;
    }
    
    /**
    * Metodo getter del Atributo $TarjetaCirculacion
    * @return type
    */
    public function getTarjetaCirculacion() {
        return $this->TarjetaCirculacion;
    }
    
    /**
    * Metodo setter del atributo $Entidad
    * @param type $Entidad
    */
    public function setEntidad($Entidad) {
        $this->Entidad = $Entidad;
    }
    
    /**
    * Metodo setter del atributo $Marca
    * @param type $Marca
    */
    public function setMarca($Marca) {
        $this->Marca = $Marca;
    }
    
    /**
    * Metodo setter del atributo $Modelo
    * @param type $Modelo
    */
    public function setModelo($Modelo) {
        $this->Modelo = $Modelo;
    }
    
    /**
    * Metodo setter del atributo $TarjetaCirculacion
    * @param type $TarjetaCirculacion
    */
    public function setTarjetaCirculacion($TarjetaCirculacion) {
        $this->TarjetaCirculacion = $TarjetaCirculacion;
    }
    
    /**
     * Metodo transportar de la clase Vehiculo
     */
    public function transportar() {
        
    }
}
