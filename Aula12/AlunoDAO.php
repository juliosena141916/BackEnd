<?php

class alunoDAO{

private $alunos = [];

public function criarAluno(Aluno $aluno){
    $this->alunos[$aluno->getId()]= $aluno;
}

public function lerAluno(){
    return $this->alunos;
}

public function atualizarAluno($id, $novoNome, $novoCurso){
    if (isset($this->alunos[$id])){
        $this->alunos[$id]->setNome(nome: $novoNome);
        $this->alunos[$id]->setCurso(curso: $novoCurso);
    }
}

public function excluirAluno($id){
    unset($this->alunos[$id]);
}

}