<?php

class Usuario{
    public $nome;
    public $CPF;
    public $sexo;
    public $email;
    public $estado_civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $CEP;

    public function __construct($nome, $CPF, $sexo, $email, $estado_civil, $cidade, $estado, $endereco, $CEP){
        $this-> nome = $nome;
        $this-> CPF = $CPF;
        $this-> sexo = $sexo;
        $this-> email = $email;
        $this-> estado_civil = $estado_civil;
        $this-> cidade = $cidade;
        $this-> estado = $estado;
        $this-> endereco = $endereco;
        $this-> CEP = $CEP;
    }
}

$pessoa1 = new Pessoa(
    "Carlos Silva",
    "123.456.789-00",
    "Masculino",
    "carlos.silva@email.com",
    "Solteiro",
    "São Paulo",
    "SP",
    "Av. Paulista, 123",
    "11111-000"
);

$pessoa2 = new Pessoa(
    "Ana Souza",
    "987.654.321-00",
    "Feminino",
    "ana.souza@email.com",
    "Casada",
    "Belo Horizonte",
    "MG",
    "Av. Afonso Pena, 456",
    "30130-000"
);

$pessoa3 = new Pessoa(
    "João Oliveira",
    "111.222.333-44",
    "Masculino",
    "joao.oliveira@email.com",
    "Divorciado",
    "Curitiba",
    "PR",
    "Rua XV de Novembro, 789",
    "80020-310"
);