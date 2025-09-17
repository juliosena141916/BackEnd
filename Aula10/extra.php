<?php
namespace Aula10;
interface movel{
    public function mover();
}

interface abastecivel{
    public function abastecer($quantidade);
}

interface manutenivel{
    public function fazerManutencao();
}

class carro implements movel, abastecer {
    public function mover(){
        echo"O carro esta se movimentando";
    }
    public function abastecer($quantidade){
        echo"$quantidade é a quantidade abastecida";
    }
}

$carro = new carro();
$carro -> mover();
$carro -> abastecer(6);