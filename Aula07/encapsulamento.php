<?php

// class Carro{
//     private $carro;
//     private $modelo1;

// public function __construct($carro, $modelo1){
//         $this -> setCarro($carro);
//         $this -> setModelo($modelo1);
//     }
    
//     public function setCarro($carro){
//         $this->carro = ucwords(strtolower($carro));
//     }

//      public function setModelo($modelo1){
//         $this->modelo1 = ucwords(strtolower($modelo1));
//     }

//     public function getCarro(){
//         return $this-> carro;
//     }

//     public function getModelo(){
//         return $this-> modelo1;
//     }
// }

// $carro1 = new Carro("fiat", "palio");
// echo $carro1->getCarro();
// echo $carro1->getModelo();



class Pessoas{
    private $nome;
    private $idade;
    private $email;

     public function __construct($nome, $idade, $email){
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> setEmail($email);
    }

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function setIdade($idade){
        $this->idade = ucwords(strtolower($idade));
    }

    public function setEmail($email){
        $this->email = ucwords(strtolower($email));
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getEmail(){
        return $this->email;
    }
}

$pessoa1 = new Pessoas();
echo $pessoa1->getNome();