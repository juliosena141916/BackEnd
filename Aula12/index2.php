<?php
namespace Aula12;
class herois{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome=$nome;
        $this->idade=$idade;
    }

}

// classe herois se relaciona com lugares
// herois treinam no cotil
// herois vão para o shopping


class lugares{
    public $nome;
    public $endereço;

    public function __construct($nome, $endereço){
        $this->nome=$nome;
        $this->endereço=$endereço;
    }
}

class brinquedos{
    public $nome;
    public $preço;

    public function __construct($nome, $preço){
        $this->nome=$nome;
        $this->preço=$preço;
    }
}