<?php
class Cachorro{
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo){
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> raca = $raca;
        $this-> castrado = $castrado;
        $this-> sexo = $sexo;
    }
}

$cachorro1 = new Cachorro("Thor", 3, "Labrador", true, "Macho");
$cachorro2 = new Cachorro("Luna", 2, "Poodle", false, "Fêmea");
$cachorro3 = new Cachorro("Rex", 5, "Pastor Alemão", true, "Macho");
$cachorro4 = new Cachorro("Mel", 1, "Shih Tzu", false, "Fêmea");
$cachorro5 = new Cachorro("Bob", 4, "Bulldog Francês", true, "Macho");
$cachorro6 = new Cachorro("Nina", 6, "Beagle", true, "Fêmea");
$cachorro7 = new Cachorro("Max", 2, "Golden Retriever", false, "Macho");
$cachorro8 = new Cachorro("Bella", 3, "Yorkshire", true, "Fêmea");
$cachorro9 = new Cachorro("Toby", 7, "Boxer", true, "Macho");
$cachorro10 = new Cachorro("Maya", 4, "Husky Siberiano", false, "Fêmea");
