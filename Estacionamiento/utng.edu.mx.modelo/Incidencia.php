<?php

/**
 * Description of Incidencia
 *
 * @author Jorge Luis L. G.
 */
class Incidencia {
    
    /**
     * Constructor de la clase
     */
    public function __construct() {
        
    }

    /**
     * Atributo $IdIncidencia de la Clase Incidencia
     */
    private $IdIncidencia;
    
    /**
     * Atributo $Nombre de la Clase Incidencia
     */
    private $Nombre;
    
    /**
     * Atributo $Fecha de la Clase Incidencia
     */
    private $Fecha;
    
    /**
     * Atributo $Descripcion de la Clase Incidencia
     */
    private $Descripcion;
    
    /**
     * Metodo getter del Atributo $IdIncidencia
     * @return type
     */
    public function getIdIncidencia() {
        return $this->IdIncidencia;
    }
    
    /**
     * Metodo getter del Atributo $nombre
     * @return type
     */
    public function getNombre() {
        return $this->Nombre;
    }
    
    /**
     * Metodo getter del Atributo $fecha
     * @return type
     */
    public function getFecha() {
        return $this->Fecha;
    }
    
    /**
     * Metodo getter del Atributo $descripcion
     * @return type
     */
    public function getDescripcion() {
        return $this->Descripcion;
    }
    
    /**
     * Metodo setter del Atributo $idIncidencia 
     * @param type $IdIncidencia
     */
    public function setIdIncidencia($IdIncidencia) {
        $this->IdIncidencia = $IdIncidencia;
    }
    
    /**
     * Metodo setter del Atributo $nombre
     * @param type $Nombre
     */
    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }
    
    /**
     * Metodo setter del Atributo $fecha
     * @param type $Fecha
     */
    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }
    
    /**
     * Metodo setter del Atributo $descripcion
     * @param type $Descripcion
     */
    public function setDescripcion($Descripcion) {
        $this->$Descripcion = $Descripcion;
    }
     
    /**
     *  Metodos que registra las incidencias de los diferentes Vehiculos 
     * @param Vehiculo $UnCoche
     */
    public function asigna(Vehiculo $UnCoche) {
        $this->Nombre[]=$UnCoche;
    }
    
    /**
     * 
     * @param Persona $UnaPer
     */
    public function reporta(Persona $UnaPer) {
        $this->IdIncidencia[] = $UnaPer;
    }
    
    
}