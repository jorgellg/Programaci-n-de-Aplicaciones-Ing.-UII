<?php

/**
 * Description of Administrador
 * Clase hija que hereda de la Clase padre Guardia
 * @author Jorge Luis L. G.
 */
class Administrador extends Guardia {
    
    /**
     * Constructor de la clase
     */
    public function __construct() {
        
    }

    /**
     * Metodo utilizado para asignat una tarjeta 
     * a los usuarios que se registran para entrar 
     * al estacionamiento 
     */
    public function asignarTarjeta($IdPersona,$Nombre) {
        
    }
    /**
     * Metodo utilizado para consultar el numero de
     * vehiculos que entran al estacionamiento
     */
    public function consultarVehiculo($Fecha) {
        
    }
    
    /**
     * Metodo utilizado para registrar las incidencias
     * reportadas
     */
    public function registraIncidencia() {
        
    }
    
    /**
     * Metodo utilizado para atender o dar seguimiento a 
     * las incidencias antes registradas
     */
    public function atenderIncidencia() {
        
    }
    
    /**
     * Metodo utilizado para registrar la afluencia de los
     * vehiculos en el estacionamiento
     */
    public function registrarAfluencia() {
        
    }
    
    /**
     * Metodo utilizado para registrar los diferentes tipos 
     * de vehiculo que entran al estacionamiento
     */
    public function registrarTipoVehiculo() {
        
    }
   
    /**
     * Metodo utilizado para registrar las caracteriticas de
     * los vehiculos que entran al estacionamiento
     */
    public function registraCaracteristicas($IdVehiculo) {
        
    }
}