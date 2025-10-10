<!-- <!-- Cenário 1 – Viagem pelo Mundo
Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
Terra, eles poderão comer comidas típicas e nadar em rios ou praias. -->

<!--Classes: turistas, japão, brasil, acre, comidas, rios, praias
<!--metodos: visitar,comer, nadar

<?php

class Turistas{
    public function visitar(){
        return "eles visitam";
    }

    public function comer(){
        return "eles comem";
    }

    public function nadar(){
        return "eles nadam";
    }
}

// classe turista se relaciona com paises
// turistas visitam paises

// classe turista se relaciona com Aguas
// turista nadão em rios e praias

//clase turista se relaciona com Alimentos
//turistas comem comidas

class Lugares{
    public $nome;

    public function __construct($nome){
        $this->nome=$nome;
    }
}

//classe paises se relaciona com Aguas
//paises tem rios e praias

//classe paises se relaciona com Alimentos
//paises tem comida

class Aguas{
    public $nome;

    public function __construct($nome){
        $this->nome=$nome;
    }
}

class Alimento{
    public $nome;

    public function __construct($nome){
        $this->nome=$nome;
    }
}

?> -->