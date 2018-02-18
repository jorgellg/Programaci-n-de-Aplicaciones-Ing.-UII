<?php

/**
 * Description of Bicicleta
 * Clase hija que extiende de la clase padre Vehiculo
 * @author Jorge Luis L. G.
 */
class Bicicleta extends Vehiculo{
    
    /**
     * Constructor de la clase
     */
    public function __construct() {
        
    }

    /** 
     * Atributo caracteristicas  de la clase Vehiculo 
     */
    private $Caracteristica;
    
    /**
     * Metodo getter del Atributo $Caracteristica
     * @return type
     */
    public function getCaracteristica() {
        return $this->Caracteristica;
    }
    
    /**
     * Metodo setter del atributo $caracteristica
     * @param type $Caracteristica
     */
    public function setCaracteristica($Caracteristica) {
        $this->Caracteristica = $Caracteristica;
    }
}
