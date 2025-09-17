<?php
namespace Aula10;
interface interface_mover{

    public function mover();
}

class carro7 implements interface_mover{
    public function mover(){
        echo "Carro Ligou\n";
    }
}


class aviao7 implements interface_mover{
    public function mover(){
        echo "Avião Voou\n";
    }
}

class barco7 implements interface_mover{
    public function mover(){
        echo "Barco Navegou\n";
    }
}


class elevador7 implements interface_mover{
    public function mover(){
        echo "Elevador Subiu\n";
    }
}


$carro7 = new carro7;
$carro7->mover();

$aviao7 = new aviao7;
$aviao7->mover();

$barco7 = new barco7;
$barco7->mover();

$elevador7 = new elevador7;
$elevador7->mover();


interface Mensagem{

    public function enviar();
    public function notificar();
}

class email implements Mensagem{

    public function enviar(){
        echo "Enviando Email...";
    }

    public function notificar(){
        echo "Email Enviado\n";
    }
}

class sms implements Mensagem{

    public function enviar(){
        echo "Enviando SMS...";
    }

    public function notificar(){
        echo "SMS Enviado\n";
    }
}

$email = new email;
$email->enviar();
$email->notificar();

$sms = new sms;
$sms->enviar();
$sms->notificar();

interface soma{
    public function somar();
}

    class calculadora implements soma{
        public function somar(){
            a1 == readline("Número 1: ");
            a2 == readline("Número 2: ");
            conta == a1 + a2;
        }
    }

$calculadora = new calculadora();
$calculadora -> somar();