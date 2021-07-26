<?php
class Cuenta{
    private $marca;
    private $duenio;
    private $dni;
    private $telefono;
    private $emailPersonal;
    private $emailMarca;
    private $redes= [];

//Para Setear el objeto
    public function __construct($marca, $duenio, $dni, $telefono, $emailPersonal, $emailMarca){
        $this->marca= $marca;
        $this->duenio= $duenio;
        $this->dni= $dni;
        $this->telefono= $telefono;
        $this->emailPersonal= $emailPersonal;
        $this->emailMarca= $emailMarca;
    }

//metodos para agregar o quitar redes
    public function agregarRedes($redes){
        $this->redes[] = $redes;
    }

    public function getRedes(){
        return $this->redes;
    }

    public function quitarRedes($redes){
        $posicion = array_search($redes,$this->redes);
        unset($this->redes[$posicion]);
    }
 //los getters para recuperar datos
    public function getMarca(){
        return $this->marca;
    }
    public function getDuenio(){
        return $this->duenio;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getEmailPersonal(){
        return $this->emailPersonal;
    }
    public function getEmailMarca(){
        return $this->emailMarca;
    }
    
    //muestra todos los datos
    public function mostrarDatos(){
        echo "Cuenta:{$this-> getMarca()}". "<br>"
            ,"Duenio:{$this-> getDuenio()}". "<br>" 
            ,"Dni:{$this-> getDni()}". "<br>"
            ,"Telefono:{$this-> getTelefono()}". "<br>"
            ,"Email Personal:{$this->getEmailPersonal()}". "<br>"
            ,"Email Marca:{$this->getEmailMarca()}". "<br>";  
    }

}





















?>