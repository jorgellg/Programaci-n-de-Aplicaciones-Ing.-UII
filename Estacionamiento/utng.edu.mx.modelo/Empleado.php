<?php

/**
 * Description of Empleado
 * Clase hija que hereda de la Clase padre Persona
 * @author Jorge Luis L. G.
 */
class Empleado extends Persona {
    
    /**
     * Constructor de la clase
     */
    public function __construct() {
        
    }

    
    /**
     * Atributo $numEmpleado de la Clase Empleado
     */
    private $NumEmpleado;
    
    /**
     * Atributo $telefonoDepartamento de la Clase Empleado
     */
    private $TelefonoDepartamento;
    /**
     * Metodo getter del Atributo $NumEmpleado
     * @return type
     */
    public function getNumEmpleado() {
        return $this->NumEmpleado;
    }
    /**
     * Metodo getter del Atributo $telefonoDepartamento
     * @return type
     */
    public function getTelefonoDepartamento() {
    return $this->TelefonoDepartamento;
    }
    
    /**
     * Metodo setter del Atributo $numEmpleado
     * @param type $NumEmpleado
     */
    public function setNumEmpleado($NumEmpleado) {
        $this->NumEmpleado = $NumEmpleado;
    }
    
    /**
     * Metodo setter del Atributo $telefonoDepartamento
     * @param type $TelefonoDepartamento
     */
    public function setTelefonoDepartamento($TelefonoDepartamento) {
        $this->TelefonoDepartamento = $TelefonoDepartamento;
    }
}
