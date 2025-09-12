<?php

// Modificadores de acesso:
// Existem 3 tipos: public, private e protected
// public Nomedoatributo: metodos e atributos publicos

// private nomedoatributo: metodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los

// protected NomedoAtributo: metodos e atributos protegidos para acesso somente das classes e de suas filhas

// pacotes: sintaxe logo no inicio do código, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele esta contido. Exemplo:

// namespace Aula 09;
// Caso tenham mais arquivos que formam o backend de uma pagina WEB e possuem a mesma raiz, o namespace será o mesmo

namespace Aula09;

// interface Pagamento{

// public function pagar($valor);
// }

// class CartaodeCredito implements Pagamento{
//     public function pagar($valor){
//         echo "Pagamento realizado com cartão de credito, valor: $valor\n";
//     }
// }

// class PIX implements Pagamento{
//     public function pagar($valor){
//         echo "Pagamento realizado com PIX valor: $valor\n";
//     }
// }


interface Forma{

public function CalcularArea($lado, $raio);
}

class Quadrado implements Forma{
    public function CalcularArea($lado, $raio){
        $calculoq = $lado * $lado;
        echo "A area do quadrado é: $calculoq \n";
    }
}

class Circulo implements Forma{
    public function CalcularArea($lado, $raio){
        $calculoc = pi()*($raio*$raio);
        echo "A area do cir: $calculoc\n";
    }
}

class Pentagono implements Forma{

    public function CalcularArea($lado, $raio){
        $apotema = readline("Insira o valor do Apótema:");
        $calculop = ((($lado * 5) * $apotema) / 2);
    }
}









$quadrado = new Quadrado();
$quadrado->CalcularArea(5,5);

$circulo = new Circulo();
$circulo->CalcularArea(5,5);

$pentagono = new Pentagono();
$pentagono ->CalcularArea(5,5);