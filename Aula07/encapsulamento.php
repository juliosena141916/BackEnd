<?php

class Carro{
    private $carro;
    private $modelo1;

public function __construct($carro, $modelo1){
        $this -> setCarro($carro);
        $this -> setModelo($modelo1);
    }
    
    public function setCarro($carro){
        $this->carro = ucwords(strtolower($carro));
    }

     public function setModelo($modelo1){
        $this->modelo1 = ucwords(strtolower($modelo1));
    }

    public function getCarro(){
        return $this-> carro;
    }

    public function getModelo(){
        return $this-> modelo1;
    }
}

$carro1 = new Carro(fiat, palio);
echo $carro1->getCarro();
