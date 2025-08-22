<?php
// class Carro
// {
//     public $marca;
//     public $modelo;
//     public $ano;
//     public $revisao;
//     public $n_donos;


//     public function __construct($marca, $modelo, $ano, $revisao, $n_donos)
//     {
//         $this->marca = $marca;
//         $this->modelo = $modelo;
//         $this->ano = $ano;   
//         $this->revisao = $revisao;
//         $this->n_donos = $n_donos;
//     }

//     public function exibirInfo(){
//         echo "Marca: $this->marca - Modelo> $this->modelo - Ano: $this->ano\n";
//     }

//     public function ligar(){
//         echo "O carro $this->modelo está ligado\n";
//     }
// }


// $carro1 = new Carro("Porsche", "911", "2020", false, 3);
// $carro2 = new Carro("Volkswagen", "Gol", "2000", true, 6 );
// $carro3 = new Carro("Chevrolet", "Classic", "2002", false, 2 );
// $carro4 = new Carro("Fiat", "Uno", "2010", true, 5 );
// $carro5 = new Carro("Chevrolet", "Corsa", "2008", false, 2 );
// $carro6 = new Carro("Volkswagen", "Polo", "1990", false, 2 );
 
// $carro1 -> ligar();
// $carro4 -> exibirInfo();


class Cachorro{
    public $nome;
    public $raca;
    public $sexo;
    public $idade;

    public function __construct($nome, $raca, $sexo, $idade){
        $this -> nome = $nome;
        $this -> raca = $raca;
        $this -> sexo = $sexo;
        $this -> idade = $idade;
    }

    public function latir(){
        echo "O cachorro $this->nome está latindo";
    }

    public function Urinar(){
        echo "O cachorro $this->nome está marcando território";
    }



}

$Cachorro1 = new Cachorro("Roberto", "bulldog", "M", 5);
$Cachorro2 = new Cachorro("Marcio", "shitzu", "M", 2);

$Cachorro1 -> latir();
$Cachorro2 -> Urinar();

