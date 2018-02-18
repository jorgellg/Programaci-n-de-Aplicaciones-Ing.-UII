<?php

/**
 * Description of Estudiante
 * Clase hija que hereda de la Clase padre Persona
 * @author Jorge Luis L. G.
 */
class Estudiante extends Persona {
    
    /**
     * Constructor de la clase
     */
    public function __construct() {
        
    }

    /**
     * Atributo $numControl de la Clase Estudiante
     */
    protected $NumControl;
    
    /**
     * Metodo getter del Atributo $numControl
     * @return type
     */
    public function getNumControl() {
        return $this->NumControl;
    }
    /**
     * Metodo setter de Atributo $numControl
     * @param type $NumControl
     */
    public function setNumControl($NumControl) {
        $this->NumControl = $NumControl;
    }
}
