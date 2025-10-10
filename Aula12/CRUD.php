<?php

class Aluno{
    private $id;
    private $nome;
    private $curso;

    public function __construct($id,$nome,$curso){
        $this->id=setId($id);
        $this->nome=setNome($nome);
        $this->curso=setCurso($curso);
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function setCurso($curso){
        $this->curso=$curso;
    }
}