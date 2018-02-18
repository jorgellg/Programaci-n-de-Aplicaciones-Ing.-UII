<?php

/**
 * Description of Persona
 * Clase padre Persona
 * @author Jorge Luis L. G.
 */
class Persona {
    
    /**
     * Constructor de la clase 
     */
    public function __construct() {
        
    }
    
    /**
     * Atribito $Nombre de la clase Persona
     */
    protected $Nombre;
    /**
     * Atribito $ApePat de la clase Persona
     */
    protected $ApePat;
    /**
     * Atribito $ApeMat de la clase Persona
     */
    protected $ApeMat;
    /**
     * Atribito $Email de la clase Persona
     */
    protected $Email;
    /**
     * Atribito $LicenciaConducir de la clase Persona
     */
    protected $LicenciaConducir;
    /**
     * Atributo de la relacion con la clase Aotomovil
     */
    protected $Automovil;
    
    /**
     * Atributo de la relacion con la clase Vehiculo
     */
    protected $Vehiculo;
    /**
     * Metodo getter del atributo $Nombre
     * @return type
     */
    public function getNombre() {
        return $this->nombre;
    }
    /**
     * Metodo getter del atributo $ApePat
     * @return type
     */
    public function getApePat() {
        return $this->ApePat;
    }
    /**
     * Metodo getter del atributo $ApeMat
     * @return type
     */
    public function getApeMat() {
        return $this->ApeMat;
    }
    /**
     * Metodo getter del atributo $Email
     * @return type
     */
    public function getEmail() {
        return $this->Email;
    }
    /**
     * Metodo getter del atributo $LicenciaConducir
     * @return type
     */
    public function getLicenciaConducir() {
        return $this->LicenciaConducir;
    }
    /**
     * Metodo setter del atributo $Nombre
     * @param type $Nombre
     */
    public function setNombre($Nombre) {
        $this->nombre = $Nombre;
    }
    /**
     * Metodo setter del atributo $ApePat
     * @param type $ApePat
     */
    public function setApePat($ApePat) {
        $this->apePat = $ApePat;
    }
    /**
     * Metodo setter del atributo $ApeMat
     * @param type $ApeMat
     */
    public function setApeMat($ApeMat) {
        $this->ApeMat = $ApeMat;
    }
    /**
     * Metodo setter del atributo $email
     * @param type $Email
     */
    public function setEmail($Email) {
        $this->Email = $Email;
    }
    /**
     * Metodo setter del atributo $LicenciaConducir
     * @param type $LicenciaConducir
     */
    public function setLicenciaConducir($LicenciaConducir) {
        $this->LicenciaConducir = $LicenciaConducir;
    }
    
    /**
     * Metodo getter del atributo SAutomovil
     * @return type
     */
    public function getAutomovil() {
        return $this->Automovil;
    }
    
    /**
     * Metodo getter del atributo $Vehiculo
     * @return type
     */
    public function getVehiculo() {
        return $this->Vehiculo;
    }
    
    /**
     * Metodo Setter del atributo $Automovil 
     * @param type $Automovil
     */
    public function setAutomovil($Automovil) {
        $this->Automovil = $Automovil;
    }
    
    /**
     * Metodo setter $Vehiculo
     * @param type $Vehiculo
     */
    public function setVehiculo($Vehiculo) {
        $this->Vehiculo = $Vehiculo;
    }

        /**
     * Metodo utilizado para entrar al estacionamiento
     */
    public function entrar($Tarjeta){
        
    }
    
    /**
     * Metodo utilizado para salir del estacionamiento
     */
    public function salir($Tarjeta){
        
    }
    
    /**
     * Metodo utilizado reportar incidencias 
     */
    public function reportarIncidencia($Nombre,$Fecha,$Descripcion){
        
    }
    /**
     * Metodo uttilizado para registrarse
     */
    public function registrarse($Nombre,$ApePat,$ApePat){
        
    }
}
