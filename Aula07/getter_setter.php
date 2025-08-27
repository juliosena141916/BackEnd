<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha){
        $this -> nome = $nome;
        $this -> cpf = $cpf;
        $this -> telefone = $telefone;
        $this -> idade = $idade;
        $this -> email = $email;
        $this -> senha = $senha;
    }

        public function setNome($nome){
        $this->nome = ucwords(strtolower)($nome);
    }

    public function getNome(){
        return $this->nome;
    }

    



}